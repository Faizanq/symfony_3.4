<?php 

namespace Bookkeeper\ManagerBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constrains as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Book")
 */
class Book{

	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GenerateValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string",length=150)
	 * 
	 * @Assert\NotBlank()
	 * @Assert\Length(min=2)
	 */

	protected $title;

	/**
	 * @ORM\Column(type="text")
	 * 
	 * @Assert\NotBlank()
	 * @Assert\Length(min=2,max=500)
	 */

	protected $discription;

	/**
	 * @ORM\Column(type="float")
	 * 
	 * @Assert\NotBlank()
	 */

	protected $price;

	/**
	 * @ORM\Column(type="integer")
	 * 
	 * @Assert\NotBlank()
	 * @Assert\Type(type="integer")
	 * @Assert\GreaterThan(value=0)
	 */

	protected $pages;

}