<?php
/**
 * Holding an instance of CLibra to enable use of $this in subclasses.
 * 
 * @package LibraCore
 */
class CObject {
    /**
     * Memebers
     */
    protected $li;
    protected $config;
    protected $request;
    protected $data;
    protected $db;
    protected $views;
    protected $session;
    protected $user;
    protected $adminUser;
    protected $adminGroup;
    
    /**
     * Constructor, can be instanciated by sending in the $li reference.
     */
    protected function __construct($li = null) {
        if (!$li) {
            $li = CLibra::Instance();
        }
        $this->li           = &$li;
        $this->config       = &$li->config;
        $this->request      = &$li->request;
        $this->data         = &$li->data;
        $this->db           = &$li->db;
        $this->views        = &$li->views;
        $this->session      = &$li->session;
        $this->user         = &$li->user;
        $this->adminUser    = &$li->adminUser;
        $this->adminGroup   = &$li->adminGroup;
    }
    
    /**
     * Wrapper for same method in CLibra. See there for documentation.
     */
    protected function RedirectTo($urlOrController = null, $method = null, $arguments = null) {
        $this->li->RedirectTo($urlOrController, $method, $arguments);
    }
    
    /**
     * Wrapper for same method in CLibra. See there for documentation.
     */
    protected function RedirectToController($method = null, $arguments = null) {
        $this->li->RedirectToController($method, $arguments);
    }
    
    /**
     * Wrapper for same method in CLibra. See there for documentation.
     */
    protected function RedirectToControllerMethod($controller = null, $method = null, $arguments = null) {
        $this->li->RedirectToControllerMethod($controller, $method, $arguments);
    }
    
    /**
     * Wrapper for same method in CLibra. See there for documentation.
     */
    protected function AddMessage($type, $message, $alternative = null) {
        $this->li->AddMessage($type, $message, $alternative);
    }
    
    /**
     * Wrapper for same method in CLibra. See there for documentation.
     */
    protected function CreateUrl($urlOrController = null, $method = null, $arguments = null) {
        return $this->li->CreateUrl($urlOrController, $method, $arguments);
    }
}
