$('.form .stages label').click(function() {
	var radioButtons = $('.form input:radio');
	var selectedIndex = radioButtons.index(radioButtons.filter(':checked'));
	selectedIndex = selectedIndex + 1;
});

function doclick() {
	var radioButtons = $('.form input:radio');
	var selectedIndex = radioButtons.index(radioButtons.filter(':checked'));

	selectedIndex = selectedIndex + 2;

	$('.form input[type="radio"]:nth-of-type(' + selectedIndex + ')').prop('checked', true);
        
       if (selectedIndex == 6) {
		$('#btn_hide').hide();
	}

}

datePickerId.max = new Date().toISOString().split("T")[0];

function checkvalue(val)
{
 var element=document.getElementById('poisoning_mode');
 if(val=='Others')
   element.style.display='block';
 else  
   element.style.display='none';
}

function checkvalue(val)
{
 var element=document.getElementById('poisoning_mode');
 if(val=='Others')
   element.style.display='block';
 else  
   element.style.display='none';
}

function checkvalue1(val)
{
 var element=document.getElementById('area');
 if(val=='Others')
   element.style.display='block';
 else  
   element.style.display='none';
}

function checkvalue2(val)
{
 var element=document.getElementById('plant_part');
 if(val=='Others')
   element.style.display='block';
 else  
   element.style.display='none';
}

function checkvalue3(val)
{
 var element=document.getElementById('circumstance');
 if(val=='Others')
   element.style.display='block';
 else  
   element.style.display='none';
}
