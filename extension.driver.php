<?php

	Class extension_flattyadmin extends Extension{

		public function getSubscribedDelegates(){
			return array(
				array(
					'page'     => '/backend/',
					'delegate' => 'InitaliseAdminPageHead',
					'callback' => 'appendAssets'
				),
			);
		}

	/*-------------------------------------------------------------------------
		Delegates:
	-------------------------------------------------------------------------*/

		public function appendAssets() {
			Administration::instance()->Page->addStylesheetToHead(URL . '/extensions/flattyadmin/assets/flatty.css', 'screen', 1000, false);
		}

	}
