<?php


namespace Office365\PHP\Client\OutlookServices;


/**
 * A file or item (contact, event or message) attached to an event or message.
 */
abstract class Attachment extends OutlookEntity
{
    /**
     * The MIME type of the attachment.
     * @var string
     */
    public $ContentType;


    /**
     * true if the attachment is an inline attachment; otherwise, false.
     * @var boolean
     */
    public $IsInline;


    /**
     * The date and time when the attachment was last modified.
     * @var \DateTime
     */
    public $LastModifiedDateTime;


    /**
     * The display name of the attachment. This does not need to be the actual file name.
     * @var string
     */
    public $Name;


    /**
     * The length of the attachment in bytes.
     * @var int
     */
    public $Size;


    public static function getType() {
        return get_called_class();
    }

}