
/*var CalculateCostTotal = function() {
    $('tr.items').each(function(i, el) {
        var $this = $(this),
            $cost = $this.find('[id="cost"]'),
            $quant = $this.find('[id="quantity"]'),
            c = parseFloat($cost.val()),
            q = parseInt($quant.val()),
            total = c * q || 0;
            
    $this.find('[id="total"]').val(total.toFixed(2));
    $this.find('[id="total"]').text(total.toFixed(2));

    });

};*/

/*var CalculateQuantityTotal = function() {
    CalculateCostTotal();
}

function notifVerif() {
    alert("Please verify your email to proceed.");
}*/

var CalculateCostTotal = function() {
$(document).ready(function(){
    $("items td").each(function(){
        var customerId = $(this).find("#quantity").html();
        alert(customerId);
    });
});​
}