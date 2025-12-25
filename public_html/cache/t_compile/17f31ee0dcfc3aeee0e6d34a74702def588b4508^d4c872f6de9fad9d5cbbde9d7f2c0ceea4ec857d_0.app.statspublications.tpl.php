<?php
/* Smarty version 4.3.1, created on 2025-05-12 16:51:29
  from 'app:statspublications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_68221901d04845_91452770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4c872f6de9fad9d5cbbde9d7f2c0ceea4ec857d' => 
    array (
      0 => 'app:statspublications.tpl',
      1 => 1732910776,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68221901d04845_91452770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79471653268221901cf3637_67069588', "page");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_79471653268221901cf3637_67069588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_79471653268221901cf3637_67069588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<div class="pkpStats">
		<pkp-header>
			<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.publications"),$_smarty_tpl ) );?>
</h1>
			<spinner v-if="isLoadingTimeline"></spinner>
			<template slot="actions">
				<date-range
					unique-id="publication-stats-date-range"
					:date-start="dateStart"
					:date-start-min="dateStartMin"
					:date-end="dateEnd"
					:date-end-max="dateEndMax"
					:options="dateRangeOptions"
					date-range-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.dateRange"),$_smarty_tpl ) );?>
"
					date-format-instructions-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.dateRange.instructions"),$_smarty_tpl ) );?>
"
					change-date-range-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.dateRange.change"),$_smarty_tpl ) );?>
"
					since-date-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.dateRange.sinceDate"),$_smarty_tpl ) );?>
"
					until-date-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.dateRange.untilDate"),$_smarty_tpl ) );?>
"
					all-dates-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.dateRange.allDates"),$_smarty_tpl ) );?>
"
					custom-range-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.dateRange.customRange"),$_smarty_tpl ) );?>
"
					from-date-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.dateRange.from"),$_smarty_tpl ) );?>
"
					to-date-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.dateRange.to"),$_smarty_tpl ) );?>
"
					apply-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.dateRange.apply"),$_smarty_tpl ) );?>
"
					invalid-date-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.dateRange.invalidDate"),$_smarty_tpl ) );?>
"
					date-does-not-exist-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.dateRange.dateDoesNotExist"),$_smarty_tpl ) );?>
"
					invalid-date-range-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.dateRange.invalidDateRange"),$_smarty_tpl ) );?>
"
					invalid-end-date-max-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.dateRange.invalidEndDateMax"),$_smarty_tpl ) );?>
"
					invalid-start-date-min-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.dateRange.invalidStartDateMin"),$_smarty_tpl ) );?>
"
					@set-range="setDateRange"
				></date-range>
				<pkp-button
					v-if="filters.length"
					:is-active="isSidebarVisible"
					@click="toggleSidebar"
				>
					<icon icon="filter" :inline="true"></icon>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.filter"),$_smarty_tpl ) );?>

				</pkp-button>
			</template>
		</pkp-header>
		<div class="pkpStats__container -pkpClearfix">
			<!-- Filters in the sidebar -->
			<div
				v-if="filters.length"
				ref="sidebar"
				class="pkpStats__sidebar"
				:class="sidebarClasses"
			>
				<pkp-header
					class="pkpStats__sidebarHeader"
					:tabindex="isSidebarVisible ? 0 : -1"
				>
					<h2>
						<icon icon="filter" :inline="true"></icon>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.filter"),$_smarty_tpl ) );?>

					</h2>
				</pkp-header>
				<div
					v-for="(filterSet, index) in filters"
					:key="index"
					class="pkpStats__filterSet"
				>
					<pkp-header v-if="filterSet.heading">
						<h3>{{ filterSet.heading }}</h3>
					</pkp-header>
					<pkp-filter
						v-for="filter in filterSet.filters"
						:key="filter.param + filter.value"
						v-bind="filter"
						:is-filter-active="isFilterActive(filter.param, filter.value)"
						@add-filter="addFilter"
						@remove-filter="removeFilter"
					></pkp-filter>
				</div>
			</div>
			<div class="pkpStats__content">
				<div v-if="chartData" class="pkpStats__graph">
					<div class="pkpStats__graphHeader">
						<h2 class="pkpStats__graphTitle -screenReader" id="publication-stats-graph-title">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.views"),$_smarty_tpl ) );?>

						</h2>
						<div class="pkpStats__graphSelectors">
							<div class="pkpStats__graphSelector pkpStats__graphSelector--timelineType">
								<pkp-button
									:aria-pressed="timelineType === 'abstract'"
									aria-describedby="publication-stats-graph-title"
									@click="setTimelineType('abstract')"
								>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.publications.abstracts"),$_smarty_tpl ) );?>

								</pkp-button>
								<pkp-button
									:aria-pressed="timelineType === 'files'"
									aria-describedby="publication-stats-graph-title"
									@click="setTimelineType('files')"
								>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.files"),$_smarty_tpl ) );?>

								</pkp-button>
							</div>
							<div class="pkpStats__graphSelector pkpStats__graphSelector--timelineInterval">
								<pkp-button
									:aria-pressed="timelineInterval === 'day'"
									aria-describedby="publication-stats-graph-title"
									:disabled="!isDailyIntervalEnabled"
									@click="setTimelineInterval('day')"
								>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.daily"),$_smarty_tpl ) );?>

								</pkp-button>
								<pkp-button
									:aria-pressed="timelineInterval === 'month'"
									aria-describedby="publication-stats-graph-title"
									:disabled="!isMonthlyIntervalEnabled"
									@click="setTimelineInterval('month')"
								>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.monthly"),$_smarty_tpl ) );?>

								</pkp-button>
							</div>
						</div>
					</div>
					<table class="-screenReader" role="region" aria-live="polite">
						<caption v-if="timelineType === 'files'"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.publications.totalGalleyViews.timelineInterval"),$_smarty_tpl ) );?>
</caption>
						<caption v-else><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.publications.totalAbstractViews.timelineInterval"),$_smarty_tpl ) );?>
</caption>
						<thead>
							<tr>
								<th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.date"),$_smarty_tpl ) );?>
</th>
								<th v-if="timelineType === 'files'" scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.fileViews"),$_smarty_tpl ) );?>
</th>
								<th v-else scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.abstractViews"),$_smarty_tpl ) );?>
</th>
							</tr>
						</thead>
						<tbody>
							<tr	v-for="segment in timeline" :key="segment.date">
								<th scope="row">{{ segment.label }}</th>
								<td>{{ segment.value }}</td>
							</tr>
						</tbody>
					</table>
					<line-chart :chart-data="chartData" aria-hidden="true"></line-chart>
					<span v-if="isLoadingTimeline" class="pkpStats__loadingCover">
						<spinner></spinner>
					</span>
				</div>
				<div class="pkpStats__panel" role="region" aria-live="polite">
					<pkp-header>
						<h2 id="publicationDetailTableLabel">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.publications.details"),$_smarty_tpl ) );?>

							<spinner v-if="isLoadingItems"></spinner>
						</h2>
						<template slot="actions">
							<div class="pkpStats__itemsOfTotal">
								{{
									replaceLocaleParams(itemsOfTotalLabel, {
										count: items.length,
										total: itemsMax
									})
								}}
								<a
									v-if="items.length < itemsMax"
									href="#publicationDetailTablePagination"
									class="-screenReader"
								>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.pagination.label"),$_smarty_tpl ) );?>

								</a>
							</div>
							<pkp-button
								ref="downloadReportModalButton"
								@click="$modal.show('downloadReport')"
							>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.downloadReport"),$_smarty_tpl ) );?>

							</pkp-button>
							<modal
								close-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.close"),$_smarty_tpl ) );?>
"
								name="downloadReport"
								title=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.download"),$_smarty_tpl ) );?>

								@closed="setFocusToRef('downloadReportModalButton')"
							>
								<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.publications.downloadReport.description"),$_smarty_tpl ) );?>
</p>
								<table class="pkpTable pkpStats__reportParams">
									<tr class="pkpTable__row">
										<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.dateRange"),$_smarty_tpl ) );?>
</th>
										<td>{{ getDateRangeDescription() }}</td>
									</tr>
									<tr
										v-for="(filterSet, index) in filters"
										class="pkpTable__row">
										<th>{{ filterSet.heading }}</th>
										<td>{{ getFilterDescription(filterSet) }}</td>
									</tr>
									<tr
										v-if="searchPhrase"
										class="pkpTable__row">
										<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.searchPhrase"),$_smarty_tpl ) );?>
</th>
										<td>{{ searchPhrase }}</td>
									</tr>
								</table>
								<action-panel class="pkpStats__reportAction">
									<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.publications"),$_smarty_tpl ) );?>
</h2>
									<p>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.publications.downloadReport.downloadSubmissions.description"),$_smarty_tpl ) );?>

									</p>
									<template slot="actions">
										<pkp-button
											@click="downloadReport"
										>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.publications.downloadReport.downloadSubmissions"),$_smarty_tpl ) );?>

										</pkp-button>
									</template>
								</action-panel>
								<action-panel class="pkpStats__reportAction">
									<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.files"),$_smarty_tpl ) );?>
</h2>
									<p>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.publications.downloadReport.downloadFiles.description"),$_smarty_tpl ) );?>

									</p>
									<template slot="actions">
										<pkp-button
											@click="downloadReport('files')"
										>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.publications.downloadReport.downloadFiles"),$_smarty_tpl ) );?>

										</pkp-button>
									</template>
								</action-panel>
								<action-panel class="pkpStats__reportAction">
									<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.timeline"),$_smarty_tpl ) );?>
</h2>
									<p>
										{{ getTimelineDescription() }}
									</p>
									<template slot="actions">
										<pkp-button
											@click="downloadReport('timeline')"
										>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.timeline.downloadReport.downloadTimeline"),$_smarty_tpl ) );?>

										</pkp-button>
									</template>
								</action-panel>
								<?php if ($_smarty_tpl->tpl_vars['geoReportType']->value) {?>
									<action-panel class="pkpStats__reportAction">
										<h2>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.geographic"),$_smarty_tpl ) );?>

											<tooltip
												tooltip="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.geographic.ccAttribution"),$_smarty_tpl ) );?>
"
												label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.geographic.tooltip.label"),$_smarty_tpl ) );?>
"
											></tooltip>
										</h2>
										<p>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.publications.downloadReport.downloadGeographic.description"),$_smarty_tpl ) );?>

										</p>
										<template slot="actions">
											<pkp-button
												@click="downloadReport('<?php echo $_smarty_tpl->tpl_vars['geoReportType']->value;?>
')"
											>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.publications.downloadReport.downloadGeographic"),$_smarty_tpl ) );?>

											</pkp-button>
										</template>
									</action-panel>
								<?php }?>
							</modal>
						</template>
					</pkp-header>
					<pkp-table
						labelled-by="publicationDetailTableLabel"
						:class="tableClasses"
						:columns="tableColumns"
						:rows="items"
						:order-by="orderBy"
						:order-direction="orderDirection"
						@order-by="setOrderBy"
					>
						<search
							slot="thead-title"
							class="pkpStats__titleSearch"
							:search-phrase="searchPhrase"
							search-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.searchSubmissionDescription"),$_smarty_tpl ) );?>
"
							@search-phrase-changed="setSearchPhrase"
						></search>
						<template slot-scope="{ row, rowIndex }">
							<table-cell
								v-for="(column, columnIndex) in tableColumns"
								:key="column.name"
								:column="column"
								:row="row"
								:tabindex="!rowIndex && !columnIndex ? 0 : -1"
							>
								<template v-if="column.name === 'title'">
									<a
										:href="row.publication.urlPublished"
										class="pkpStats__itemLink"
										target="_blank"
									>
										<span class="pkpStats__itemAuthors">{{ row.publication.authorsStringShort }}</span>
										<span class="pkpStats__itemTitle">{{ localize(row.publication.fullTitle) }}</span>
									</a>
								</template>
							</table-cell>
						</template>
					</pkp-table>
					<div v-if="!items.length" class="pkpStats__noRecords">
						<template v-if="isLoadingItems">
							<spinner></spinner>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.loading"),$_smarty_tpl ) );?>

						</template>
						<template v-else>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.publications.none"),$_smarty_tpl ) );?>

						</template>
					</div>
					<pagination
						v-if="lastPage > 1"
						id="publicationDetailTablePagination"
						:current-page="currentPage"
						:is-loading="isLoadingItems"
						:last-page="lastPage"
						@set-page="setPage"
					></pagination>
				</div>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block "page"} */
}
