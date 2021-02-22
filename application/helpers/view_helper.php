<?php


if (!function_exists('render')) {
	function render($viewName, $viewData = array(), $isWithWrapper = false, $data = array()) {
		$ci = &get_instance();
		$defaultData = array(
			"title" => "CodeIgniter Skeleton",
			"load_css" => [], // URL,
			"load_js" => [], // URL,
			"view" => "", // View Name
			"data" => null,
		);

		if ($isWithWrapper) {
			$wrapperData = array_replace($defaultData, $data);
			$wrapperData['view'] = $viewName;
			$wrapperData['data'] = $viewData;
			return $ci->load->view('layout_view', $wrapperData);
		} else {
			return $ci->load->view($viewName, $viewData);
		}
	}
}
