<?php
    
    namespace daoImpl;
    
    use entities\UserRole;
    use dao\IUserRoleDAO;
    use dmapimpl\DAO;
    use Doctrine\ORM\NonUniqueResultException;
    
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */
    require_once APPPATH . 'models/dao/IUserRoleDAO.php';
    require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';
    
    /**
     * Description of UserRoleDAO 
     *
     *@author Xlencia
     *@Implement the data access object's interface of UserRole
     */
    class UserRoleDAO extends DAO implements IUserRoleDAO {
        
        public function __construct() {
            
            parent::__construct(UserRole::class);
        }
        
        /**
         * @param $object
         * @return mixed
         * @throws \Doctrine\ORM\NoResultException
         */
        public function getOne($object) {
            
            $query = $this->em->createQuery('SELECT e FROM UserRole e JOIN e.users u WHERE u.id = :Id');
            $query->setParameter('Id', $object->getId());
            try {
                return $query->getSingleResult();
            } catch (NonUniqueResultException $ex) {
                echo $ex->getMessage();
            }
            
            return null;
        }
        
        public function saveAll($objects) {
            
            foreach ($objects as $object) {
                $this->saveOne($object);
            }
        }
        
        public function saveOne($object) {
            
            $userRoleTable = $this->em->getClassMetadata(UsersRole::class)->getTableName();
//        print_r($object[0]);
            $stmt = $this->em->getConnection()->query('INSERT INTO ' . $userRoleTable .
                '(users_id,role_id,state) '
                . 'VALUES(' . $object[0] . ',' . $object[1] . ',' . $object[2] . ')');
            $stmt->execute();
        }
        
    }
