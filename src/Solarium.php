<?php
namespace soooldier\Yii2Solarium;

use yii\base\Component;

class Solarium  extends Component
{
    /**
     * @var array
     */
    public $clientOptions;

    /**
     * @var Solarium\Client
     */
    protected $client;


    /**
     * @ignore
     */
    public function init()
    {
        $this->client = new \Solarium\Client(['endpoint' => $this->clientOptions]);
        parent::init();
    }

    /**
     * @ignore
     * @return type
     */
    public function getClientOptions()
    {
        return $this->clientOptions;
    }
    /**
     * Set Solarium client options
     *
     * @see http://wiki.solarium-project.org/index.php/V1:Client#Options
     * @param array|\Zend_Config $clientOptions
     */
    public function setClientOptions($clientOptions)
    {
        $this->clientOptions = $clientOptions;
    }
    
    /**
     * Get the configured solarium instance
     * @return Solarium\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}

