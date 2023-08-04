<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

//use serviceImpl\AcademicYearService;
//require_once APPPATH . 'models/serviceImpl/AcademicYearService.php';
$config['composer_autoload'] = false;

require_once(APPPATH . 'third_party/vendor/autoload.php');

/**
 * @property CRUD crud
 * @property SmartyLayout layout
 * @property ArrayIterator academicyear_datalist
 * @property CI_Session session
 *  @author Xlencia
 */
class BaseController extends CI_Controller {

    private $normalStatus = 0;
    private $deleteStatus = 1;
    private $updateStatus = 2;
    private $abandonStatus = -1;
    private $restoreStatus = -2;
    private $pictures_url = 'pictures/';
    private $base_pictures_url = '';
    protected $academicYearService;
    protected $academic_year_activated;

    /**
     * constructor
     */
    public function __construct() {

        parent::__construct();

//        $this->academicYearService = new AcademicYearService();
//        $this->academicyear_datalist = $this->crud->readSortAsc($this->academicYearService, 'wording');
//        $this->layout->assignOne('academicyeardatalist', $this->academicyear_datalist);
//        $this->academic_year_activated = $this->academicYearService->getActivated();
//        $this->layout->assignOne('academicyearactivated', $this->academic_year_activated);
      $this->layout->assignAll($this->config->item("baseconfig"));

        $this->layout->assignOne('base_url', base_url());
        $this->layout->assignOne('root_url', base_url() . 'index.php');
        $this->layout->assignOne('assets_url', base_url() . 'assets');
        $this->layout->assignOne('base_pictures_url', base_url() . 'pictures');
//        $plain_text = '10';
//        $ciphertext = $this->crypt->encrypt($plain_text);
//        $this->layout->assignOne("encryption_key", $this->crypt->decrypt($ciphertext));
//        $this->layout->assignOne("encryption_key", $ciphertext);
//        $this->layout->assignOne('encryption_key', $this->crypt->create_key(16));
//        $this->layout->assignOne('css_url', base_url() . 'assets/css');
//        $this->layout->assignOne('js_url', base_url() . 'assets/js');
//        FormCSSAssign($this->layout);
    }

    
    public function encryptionId($key = 0) {
        return "%xln0".rand(0,$key).":@_".$key * 19;
    }

    public function decryptionId($key = 0) {
        return explode("_", $key)[1] / 19;
    }
    
    public function getPostData() {
        return NULL;
    }

    public function editFields($key) {
        return $key;
    }

    public function keepFields($entity) {
        return $entity;
    }

    public function doUpdate($key) {
        return $key;
    }

    public function getNormalStatus() {

        return $this->normalStatus;
    }

    public function getDeleteStatus() {

        return $this->deleteStatus;
    }

    public function getUpdateStatus() {

        return $this->updateStatus;
    }

    public function getAbandonStatus() {

        return $this->abandonStatus;
    }

    public function getRestoreStatus() {

        return $this->restoreStatus;
    }

    public function getAcademic_year_activated() {

        return $this->academic_year_activated;
    }

    public function setNormalStatus($normalStatus) {

        $this->normalStatus = $normalStatus;
    }

    public function setDeleteStatus($deleteStatus) {

        $this->deleteStatus = $deleteStatus;
    }

    public function setUpdateStatus($updateStatus) {

        $this->updateStatus = $updateStatus;
    }

    public function setAbandonStatus($abandonStatus) {

        $this->abandonStatus = $abandonStatus;
    }

    public function setRestoreStatus($restoreStatus) {

        $this->restoreStatus = $restoreStatus;
    }

    function getBase_pictures_url() {
        return dirname(dirname(__DIR__)).'/' . $this->pictures_url;
    }

    function getPictures_url() {
        return $this->pictures_url;
    }

    function setBase_pictures_url($base_pictures_url) {
        $this->base_pictures_url = $base_pictures_url;
    }

    function setPictures_url($pictures_url) {
        $this->pictures_url = $pictures_url;
    }

    public function setAcademic_year_activated($academic_year_activated) {

        $this->academic_year_activated = $academic_year_activated;
    }

}
