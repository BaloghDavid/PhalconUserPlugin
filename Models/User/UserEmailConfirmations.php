<?php
namespace Phalcon\UserPlugin\Models\User;

/**
 * Phalcon\UserPlugin\Models\User\UserEmailConfirmations
 */
class UserEmailConfirmations extends \Phalcon\Mvc\Model
{
    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var integer
     */
    protected $user_id;

    /**
     *
     * @var string
     */
    protected $code;

    /**
     *
     * @var string
     */
    protected $created_at;

    /**
     *
     * @var string
     */
    protected $modified_at;

    /**
     *
     * @var integer
     */
    protected $confirmed;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Method to set the value of field user_id
     *
     * @param integer $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * Method to set the value of field code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Method to set the value of field created_at
     *
     * @param string $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * Method to set the value of field modified_at
     *
     * @param string $modified_at
     * @return $this
     */
    public function setModifiedAt($modified_at)
    {
        $this->modified_at = $modified_at;
        return $this;
    }

    /**
     * Method to set the value of field confirmed
     *
     * @param integer $confirmed
     * @return $this
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;
        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Returns the value of field created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Returns the value of field modified_at
     *
     * @return string
     */
    public function getModifiedAt()
    {
        return $this->modified_at;
    }

    /**
     * Returns the value of field confirmed
     *
     * @return integer
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    public function getSource()
    {
        return 'user_email_confirmations';
    }

    /**
     * @return UserEmailConfirmations[]
     */
    public static function find($parameters = array())
    {
        return parent::find($parameters);
    }

    /**
     * @return UserEmailConfirmations
     */
    public static function findFirst($parameters = array())
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap() {
        return array(
            'id' => 'id',
            'user_id' => 'user_id',
            'code' => 'code',
            'created_at' => 'created_at',
            'modified_at' => 'modified_at',
            'confirmed' => 'confirmed'
        );
    }
}