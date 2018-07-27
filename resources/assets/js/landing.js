
/*
 * ScrollReveal.js
 */
window.sr = ScrollReveal();

document.querySelectorAll('a[href^="#"]').forEach(anchor =>
{
  	anchor.addEventListener('click', function (e)
  	{
	    e.preventDefault();
	    document.querySelector(this.getAttribute('href')).scrollIntoView({
	      	behavior: 'smooth',
	    });
  	});
});

/**
 * Disabled button al enviar el formulario
 */
$(document).ready(function()
{
	$('form').submit(function()
    {
        $(this).find('button[type="submit"]').attr('disabled', true);
    });
});