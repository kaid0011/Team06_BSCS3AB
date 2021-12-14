<?php

        class PrivateNotebook_model extends CI_Model
        {
                public function __construct(){
                        parent::__construct();
                        
                        $this->load->database();
                }

                public function get_PrivateNotebookInput($privateNB_ID){

                        $this->db->where('privateNB_ID', $privateNB_ID);
                        $this->db->select('pageInput, pageTheme, pageTimer, page_InputImage');
                        $query = $this->db->get("privatenb_pages");
                        return $query;
        
                }

                public function updatePage($pageTimer, $pageTheme, $pageInput, $pageImage, $id)
                {

                    $this->db->where('privateNB_ID',$id);
                    $this->db->set('pageTimer',$pageTimer);
                    $this->db->set('pageTheme',$pageTheme);
                    $this->db->set('pageInput',$pageInput);
                    $this->db->set('page_InputImage', $pageImage);
                    
                    
                    $result = $this->db->update('privatenb_pages');
                
                    

                    if($result == true)
                    {
                        return true;
                    }

                    else
                    {
                        return false;
                    }
                    
                

                }

                public function getImage($page_ID)
                {
                    $connect = mysqli_connect("localhost", "root", "team6", "virtual_diary");
                    $query = "SELECT * FROM privatenb_pages WHERE privateNB_ID = $page_ID";
                    $result = mysqli_query($connect, $query);
                    while ($image = mysqli_fetch_array($result))
                        {
                            if($image['page_InputImage'] != NULL)
                                {
                                    echo '<img style="width: 200px; height: 200px;" src="data:image/jpeg;base64, '.base64_encode($image['page_InputImage'] ). '"';
                                }
                            else
                            {
                                return FALSE;
                            }
                        }
                }
       }

?>