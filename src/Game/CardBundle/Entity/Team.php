<?php

namespace Game\CardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Game\CardBundle\Entity\TeamRepository")
 */
class Team
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Player")
     * @ORM\JoinColumn(nullable=false)

     */
    private $player1;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Player")
     * @ORM\JoinColumn(nullable=false)
     */
    private $player2;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set player1
     *
     * @param Player $player1
     * @return Player
     */
    public function setPlayer1($player1)
    {
        $this->player1 = $player1;
    
        return $this;
    }

    /**
     * Get player1
     *
     * @return Player
     */
    public function getPlayer1()
    {
        return $this->player1;
    }

    /**
     * Set player2
     *
     * @param Player $player2
     * @return Player
     */
    public function setPlayer2($player2)
    {
        $this->player2 = $player2;
    
        return $this;
    }

    /**
     * Get player2
     *
     * @return Player
     */
    public function getPlayer2()
    {
        return $this->player2;
    }
}
