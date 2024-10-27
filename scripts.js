document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Previene el envío del formulario por defecto
    
    // Recoger los datos del formulario
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Validar los campos (ejemplo de validación simple)
    if (name && email && message) {
        alert('Formulario enviado con éxito');
        this.submit(); // Enviar el formulario
    } else {
        alert('Por favor, completa todos los campos');
    }
});
