<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * SmartyLayout Class
 *
 * @package        CodeIgniter
 * @subpackage     Libraries
 * @category       Smarty
 * @author         Kepler Gelotte
 * @link           http://www.coolphptools.com/codeigniter-smarty
 */
require_once(APPPATH . '/third_party/vendor/smarty/smarty/libs/Smarty.class.php');

class SmartyLayout extends Smarty {

    var $debug = false;

    function __construct() {

        parent::__construct();

        $this->template_dir = APPPATH . "views/templates";
        $this->compile_dir = APPPATH . "views/templates_c";
        if (!is_writable($this->compile_dir)) {
            // make sure the compile directory can be written to
            @chmod($this->compile_dir, 0777);
        }

        // Uncomment these 2 lines to change Smarty's delimiters
        // $this->left_delimiter = '{{';
        // $this->right_delimiter = '}}';

        $this->assign('FCPATH', FCPATH);     // path to website
        $this->assign('APPPATH', APPPATH);   // path to application directory
        $this->assign('BASEPATH', BASEPATH); // path to system directory
        $this->assign('PSTYLEPATH', FCPATH. "assets/css/pstyle"); // path to pstyle directory
        $this->assign('PSCRIPTPATH', FCPATH . "assets/js/pscript"); // path to pscript directory

        log_message('debug', "Smarty Class Initialized");
    }

    function setDebug($debug = true) {

        $this->debug = $debug;
    }

    /**
     *  Parse a template using the Smarty engine
     *
     * This is a convenience method that combines assign() and
     * display() into one step.
     *
     * Values to assign are passed in an associative array of
     * name => value pairs.
     *
     * If the output is to be returned as a string to the caller
     * instead of being output, pass true as the third parameter.
     *
     * @access    public
     * @param    string
     * @param    array
     * @param    bool
     * @return    string
     */
    function view($template, $data = array(), $return = FALSE) {

        if (!$this->debug) {
            $this->error_reporting = false;
        }
        $this->error_unassigned = false;

        foreach ($data as $key => $val) {
            $this->assign($key, $val);
        }

        if ($return == FALSE) {
            $CI = & get_instance();
            if (method_exists($CI->output, 'set_output')) {
                $CI->output->set_output($this->fetch($template));
            } else {
                $CI->output->final_output = $this->fetch($template);
            }
            return;
        } else {
            return $this->fetch($template);
        }
    }

    function assignOne($attribute, $value) {

        $this->assign($attribute, $value);
    }

    function assignAll($assignArray) {

        foreach ($assignArray as $attribute => $value) {

            $this->assignOne($attribute, $value);
        }
    }

    function statusBar($statusbartitle, $havestatusbar, $addnew, $list) {

        $this->assignOne('statusbartitle', $statusbartitle);
        $this->assignOne('havastatusbar', $havestatusbar);
        $this->assignOne('addnew', $addnew);
        $this->assignOne('list', $list);
    }

    function currentLink($link) {

        $this->assignOne('dashboardlink', '');
        $this->assignOne('utilslink', '');
        $this->assignOne('adminlink', '');
        $this->assignOne('registrationlink', '');
        $this->assignOne('accountinglink', '');
        $this->assignOne('teachinglink', '');
        $this->assignOne('evaluationlink', '');
        $this->assignOne('officiallink', '');
        $this->assignOne('reportinglink', '');
        $this->assignOne('backuplink', '');
        $this->assignOne($link, "current");
    }

}

// END SmartyLayout Class
