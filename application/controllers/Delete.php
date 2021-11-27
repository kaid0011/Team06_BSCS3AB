<?php defined('BASEPATH') OR exit ('NO direct script access allowed');

class Private_area extends CI_Controller {
    public function _construct()
    {
        parent::__construct();
    }

    {public function inserted();}

    public function delete_data()
    {
    $id = 1;
    /// this is just a dummy variable to identify which column to nuke.
    /// this is due to login not being polished yet

    $response = $this->Delete_model->del($id);
    $this->load->model("Delete_model"); 
    //// little comment on this, supposebly you're gonna load the model
    //// here we'll use "delete_model".
    redirect(base_url(). "delete/deleted";)
}

    public function deleted ()
{
    $this->index();
}

}