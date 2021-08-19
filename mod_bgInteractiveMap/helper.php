<?php

function getArticlesFromCategory($category_id) {
/**
     * Get featured articles in given category
     */
        $model = JModelLegacy::getInstance('Articles', 'ContentModel', array('ignore_request' => true));
        $model->getState();

        // Set application parameters in model
        $app = JFactory::getApplication();
        $appParams = $app->getParams();
        $model->setState('params', $appParams);

        // Set the filters based on the module params
        $model->setState('list.start', 0);
        $model->setState('list.limit', 200);
        $model->setState('filter.category_id', $categoryId);
        $model->setState('filter.published', 1);

        // Permissions
        $access = !JComponentHelper::getParams('com_content')->get('show_noauth');
        $authorised = JAccess::getAuthorisedViewLevels(JFactory::getUser()->get('id'));
        $model->setState('filter.access', $access);

        // Featured Item

        // Get article from featured set
        // $model->setState('filter.featured', 'only');

        // Ordering
        $model->setState('list.ordering', 'a.publish_up');
        $model->setState('list.direction', 'DESC');

        $model->setState('filter.subcategories', true);
        $model->setState('filter.max_category_levels', 90);

        $items = $model->getItems();

        JLoader::register('FieldsHelper', JPATH_ADMINISTRATOR . '/components/com_fields/helpers/fields.php'); //load fields helper
        foreach ($items as &$place) {

            /**
             * Get article custom fields value
             */
            $article_id = $place->id;
 
    
            $customFieldnames = FieldsHelper::getFields('com_content.article', $article_id, true); // get custom field names by article id
            // $customFieldIds = array_map(create_function('$o', 'return $o->id;'), $customFieldnames); //get custom field Ids by custom field names
            $customFieldIds = array_column($customFieldnames, 'id');
            $model = JModelLegacy::getInstance('Field', 'FieldsModel', array('ignore_request' => true)); //load fields model
            $vals = $model->getFieldValues($customFieldIds, $article_id); //Fetch values for custom field Ids
            $aid = array_column($customFieldnames, 'id');

            $place->coordinates = [
                // 'values' => $customFieldIds,
                'lat' => $vals[1],
                'long' => $vals[2],
                'aid' => $article_id,
            ];

        }
    return $items;
}