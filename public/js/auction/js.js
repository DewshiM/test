/**
 * buyerBidProduct
 * Created by User-PC on 1/6/2017.
 */

jQuery(function () {
    var scntDiv = jQuery('#tbody');
    var j =  1;

    jQuery('#add').click(function () {


        jQuery(
        ).appendTo(scntDiv);
        j++;
        return false;
    });

    jQuery('#remove').live('click', function () {

        if (j > 1) {
            jQuery(this).parents('tr').remove();
            j--;
        } else {
            sweetAlert("Oops...", "Cannot delete", "error");
        }
        return false;
    });
});