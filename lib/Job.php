<?php 

class Job {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    //Get all jobs

    public function getAllJobs()
    {
                $this->db->query("SELECT jobs.*, categories.name AS cname
                FROM jobs
                INNER JOIN categories 
                 ON jobs.category_id = categories.id
                 ORDER BY post_date DESC
                 ");
     
     //Asign result set
     $results = $this->db->resultSet();
    return $results; 

}
   
    // Get Categories 

        public function  getCategories()
        {

            $this->db->query("SELECT * FROM categories");

        //Asign result set
        $results = $this->db->resultSet();
        return $results; 
        }
    
    //Get jobs by category

    public function getByCategory($category)
    {
        $this->db->query("SELECT jobs.*, categories.name AS cname
        FROM jobs
        INNER JOIN categories 
         ON jobs.category_id = categories.id
         WHERE jobs.category_id = $category
         ORDER BY post_date DESC
         ");

        //Asign result set
        $results = $this->db->resultSet();
        return $results; 
     }

     //Get category

     public function getCategory($category_id)
     {
        $this->db->query("SELECT * FROM categories WHERE id = :category_id" );
        $this->db->bind(':category_id', $category_id);

        //Assign row
        $row = $this->db->single();
        return $row;
     }
     // Get Job
     public function getJob($id)
     {
        $this->db->query("SELECT * FROM jobs WHERE id = :id" );
        $this->db->bind(':id', $id);

        //Assign row
        $row = $this->db->single();
        return $row;
     }
     //Create job

     public function create($data)
     {
        //Query
        $this->db->query("INSERT INTO jobs (category_id, job_title, company, description, location, salary, contact_user, contact_email) 
        VALUES (:category_id, :job_title, :company, :description, :location, :salary, :contact_user, :contact_email)");
        //BIND DATA
        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':decription', $data['description']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':salary', $data['salary']);
        $this->db->bind(':contact_user', $data['contact_user']);
        $this->db->bind(':contact_email', $data['contact_email']);

        //execute
        if($this->db->execute())
        {
            return true;
        }else{
            return false;
        }
     }
     
     public function delete($id)
     {
         //Query
         $this->db->query("DELETE FROM jobs WHERE id = $id");
        
         //execute
         if($this->db->execute())
         {
             return true;
         }else{
             return false;
         }
     }

     //Update Job
     public function update($id, $data)
     {
        //Query
        $this->db->query("
        UPDATE jobs SET
        category_id = :category_id,
        job_title = :job_title,
        compay = :company,
        description = :description,
        location = :location,
        salary = :salary,
        contact_user = :contact_user,
        contact_email = :contact_email
        WHERE id = $id");
        //BIND DATA
        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':job_title', $data['job_title']);
        $this->db->bind(':company', $data['company']);
        $this->db->bind(':decription', $data['description']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':salary', $data['salary']);
        $this->db->bind(':contact_user', $data['contact_user']);
        $this->db->bind(':contact_email', $data['contact_email']);

        //execute
        if($this->db->execute())
        {
            return true;
        }else{
            return false;
        }
     }
}