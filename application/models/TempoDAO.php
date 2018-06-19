                    <?php
                    Class TempoDAO extends CI_Model{

                        Public function __construct()
                        {
                            parent::__construct();
                            $this->load->library('class/TempoModel');
                        }

                        Public function findTempo()
                        {
                            $res = $this->db->get('tempo');
                            if ($res->num_rows() > 0) {
                                $data = array();
                                foreach ($res->result() as $row) {
                                    $item = new TempoModel();
                                    $this->createTempo($item, $row);
                                    array_push($data, $item);
                                }
                                return $data;
                            }
                            return 'FALSE';
                        }

                        public function save($client)
                        {
                            $this->load->database();
                            $data = array(
                                'NOM' => $client->getNOM(),
                                'QT' => $client->getQT(),
                                'PRIX' => $client->getPRIX()
                            );

                            $this->db->insert('tempo', $data);
                            return $this->db->insert();
                        }

                        public function update($model){
                            $data = array(
                                'nomclient' => $model->getNom(),
                                'prenomclient' => $model->getPrenom(),
                                'emailclient' => $model->getEmail(),
                                'telephoneclient' => $model->getTelephone(),
                                'adresseclient' => $model->getAdresse()
                            );
                            $this->db->where(array('idclient' => $model->getId()));
                            return $this->db->update("client",$data);
                        }

                        public function delete($id,$table){
                            $this->db->where('id'.$table, $id);
                            return $this->db->delete($table);
                        }

                        public function createStat($model, $res){
                            $model->setNOMSUPERMAKI($res->NOMSUPERMAKI);
                            $model->setIDCAISSE($res->ID_CAISSE);
                            $model->setARGENTENCAISSE($res->ARGENT_EN_CAISSE);
                            $model->setNOMBREFACTUREPARSUPERMAKI($res->NOMBRE_FACTURE_PAR_SUPERMAKI);
                        }

                        public function createTempo($model, $res){
                            $model->setNOM($res->NOM);
                            $model->setQT($res->QT);
                            $model->setPRIX($res->PRIX);
                        }
                    }

                    ?>
