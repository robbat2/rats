<?
/*
 * Table Definition for Bookings
 * $Id: Bookings.php,v 1.1 2002/11/14 08:45:44 robbat2 Exp $
 */



require_once('DB/DataObject.php');

class DObj_Bookings extends DB_DataObject {

    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    var $__table='Bookings';                        // table name
    var $BookingsID;                      // int(10)  not_null primary_key unsigned zerofill auto_increment
    var $UserID;                          // int(10)  not_null
    var $ObjectID;                        // int(10)  not_null
    var $BookingsStartDate;               // datetime(19)  not_null
    var $BookingsEndDate;                 // datetime(19)  not_null


    /* ZE2 compatibility trick*/
    function __clone() { return $this;}



    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DObj_Bookings',$k,$v); }


    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
?>