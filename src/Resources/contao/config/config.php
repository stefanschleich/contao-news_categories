<?php

/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['content']['news']['tables'][] = 'tl_news_category';

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['news']['newscategories'] = 'ModuleNewsCategories';

/**
 * Content elements
 */
$GLOBALS['TL_CTE']['includes']['newsfilter'] = 'ContentNewsFilter';

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['changelanguageNavigation'][] = [
    'codefog_news_categories.listener.change_language',
    'onChangeLanguageNavigation',
];
$GLOBALS['TL_HOOKS']['parseArticles'][] = ['codefog_news_categories.listener.template', 'onParseArticles'];
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = ['codefog_news_categories.listener.insert_tags', 'onReplace'];

/**
 * Add permissions
 */
$GLOBALS['TL_PERMISSIONS'][] = 'newscategories';
$GLOBALS['TL_PERMISSIONS'][] = 'newscategories_default';