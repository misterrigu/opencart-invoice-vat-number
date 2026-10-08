<?php
class ControllerExtensionModuleRiguInvoiceTaxNumber extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/rigu_invoice_tax_number');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_rigu_invoice_tax_number', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');

		$data['entry_label'] = $this->language->get('entry_label');
		$data['entry_number'] = $this->language->get('entry_number');
		$data['entry_status'] = $this->language->get('entry_status');

		$data['help_label'] = $this->language->get('help_label');
		$data['help_number'] = $this->language->get('help_number');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['error_warning'] = isset($this->error['warning']) ? $this->error['warning'] : '';

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/rigu_invoice_tax_number', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/rigu_invoice_tax_number', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_rigu_invoice_tax_number_label'])) {
			$data['module_rigu_invoice_tax_number_label'] = $this->request->post['module_rigu_invoice_tax_number_label'];
		} else {
			$data['module_rigu_invoice_tax_number_label'] = $this->config->get('module_rigu_invoice_tax_number_label');
		}

		if (isset($this->request->post['module_rigu_invoice_tax_number_number'])) {
			$data['module_rigu_invoice_tax_number_number'] = $this->request->post['module_rigu_invoice_tax_number_number'];
		} else {
			$data['module_rigu_invoice_tax_number_number'] = $this->config->get('module_rigu_invoice_tax_number_number');
		}

		if (isset($this->request->post['module_rigu_invoice_tax_number_status'])) {
			$data['module_rigu_invoice_tax_number_status'] = $this->request->post['module_rigu_invoice_tax_number_status'];
		} else {
			$data['module_rigu_invoice_tax_number_status'] = $this->config->get('module_rigu_invoice_tax_number_status');
		}

		if ($data['module_rigu_invoice_tax_number_label'] === null || $data['module_rigu_invoice_tax_number_label'] === '') {
			$data['module_rigu_invoice_tax_number_label'] = 'VAT No.';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/rigu_invoice_tax_number', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/rigu_invoice_tax_number')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
