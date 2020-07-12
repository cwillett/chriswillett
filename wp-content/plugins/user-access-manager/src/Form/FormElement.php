<?php
/**
 * FormElement.php
 *
 * The FormElement class file.
 *
 * PHP versions 5
 *
 * @author    Alexander Schneider <alexanderschneider85@gmail.com>
 * @copyright 2008-2017 Alexander Schneider
 * @license   http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License, version 2
 * @version   SVN: $id$
 * @link      http://wordpress.org/extend/plugins/user-access-manager/
 */
namespace UserAccessManager\Form;

/**
 * Class FormElement
 *
 * @package UserAccessManager\Form
 */
abstract class FormElement
{
    use ValueTrait;
    use LabelTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var mixed
     */
    protected $value;

    /**
     * @var string
     */
    protected $label;

    /**
     * @var string
     */
    protected $description;

    /**
     * FormElement constructor.
     *
     * @param string      $id
     * @param mixed|null  $value
     * @param string|null $label
     * @param string|null $description
     */
    public function __construct($id, $value = null, $label = null, $description = null)
    {
        $this->id = $id;
        $this->value = $value;
        $this->label = $label;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
