<?php
    $this->load->view("template/header");
    $this->load->view("template/sidebar");
    $this->load->view($contents);
    $this->load->view("template/footer");
?>
