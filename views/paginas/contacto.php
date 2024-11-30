<p class="text-center py-3 my-4 mx-3">
  Complete el Formulario y envíenos su consulta sobre presupuestos, eventos, etc
</p>

<?php if ($mensaje): ?>
  <p class="alerta exito"> <?php echo $mensaje; ?> </p>
<?php endif; ?>

<form class="container formulario" action="/contacto" method="POST">
  
  <fieldset>
    <legend>Información Personal</legend>
    <label for="nombre">Nombre</label>
    <input type="text" placeholder="Tu Nombre" id="nombre" name="contacto[nombre]" required>
    <label for="email">E-mail</label>
    <input type="email" placeholder="Tu Email" id="email" name="contacto[email]" required>
    <label for="telefono">Teléfono</label>
    <input type="tel" placeholder="Tu Teléfono" id="telefono" name="contacto[telefono]">
  </fieldset>
  
  <fieldset>  
    <legend>Sobre el evento</legend>
    <label for="opciones-tipo">Tipo de evento</label>
    <select id="opciones-tipo" name="contacto[tipo]">
      <option value="" disabled selected>-- Seleccione --</option>
      <option value="Boda"> Boda </option>
      <option value="Quince"> Quince </option>
      <option value="Social"> Social </option>
      <option value="Otro"> Otro (especificar) </option>
    </select>
    <input type="text" placeholder="Describa brevemente el tipo de evento" id="otro" name="contacto[tipo]" />
    <label for="asistentes"> Cantidad de asistentes </label>
    <input type="number" placeholder="Cantidad de asistentes al evento" id="asistentes" name="contacto[asistentes]" required>
    <label for="opciones-lugar"> Localización </label>
    <select id="opciones-lugar" name="contacto[lugar]" required>
      <option value="" disabled selected>-- Seleccione --</option>
      <option value="Rosario"> Rosario </option>
      <option value="Fuera de Rosario"> Fuera de Rosario </option>
    </select>
    <label for="mensaje"> Mensaje </label>
    <textarea placeholder="Algo más que quieras contarnos sobre el evento...?" id="mensaje" name="contacto[mensaje]"></textarea>
  </fieldset>

  <div class="d-grid gap-1 d-sm-flex justify-content-md-start px-3 ms-sm-auto">
    <button type="submit" class="btn btn-outline-success enviar"> Enviar </button>
  </div>

</form>

<div class="whatsapp-btn-container">
  <a href="https://wa.me/<?php echo $_ENV['WHAPP_NR']; ?>?text=Hola%21%20Quisiera%20solicitar%20un%20presupuesto%20para%20un%20evento." class="whatsapp-btn">
    <svg fill="#45372f" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.42 9.49c-.19-.09-1.1-.54-1.27-.61s-.29-.09-.42.1-.48.6-.59.73-.21.14-.4 0a5.13 5.13 0 0 1-1.49-.92 5.25 5.25 0 0 1-1-1.29c-.11-.18 0-.28.08-.38s.18-.21.28-.32a1.39 1.39 0 0 0 .18-.31.38.38 0 0 0 0-.33c0-.09-.42-1-.58-1.37s-.3-.32-.41-.32h-.4a.72.72 0 0 0-.5.23 2.1 2.1 0 0 0-.65 1.55A3.59 3.59 0 0 0 5 8.2 8.32 8.32 0 0 0 8.19 11c.44.19.78.3 1.05.39a2.53 2.53 0 0 0 1.17.07 1.93 1.93 0 0 0 1.26-.88 1.67 1.67 0 0 0 .11-.88c-.05-.07-.17-.12-.36-.21z"></path><path d="M13.29 2.68A7.36 7.36 0 0 0 8 .5a7.44 7.44 0 0 0-6.41 11.15l-1 3.85 3.94-1a7.4 7.4 0 0 0 3.55.9H8a7.44 7.44 0 0 0 5.29-12.72zM8 14.12a6.12 6.12 0 0 1-3.15-.87l-.22-.13-2.34.61.62-2.28-.14-.23a6.18 6.18 0 0 1 9.6-7.65 6.12 6.12 0 0 1 1.81 4.37A6.19 6.19 0 0 1 8 14.12z"></path></g></svg>
  </a>
  <span>Contáctenos</span>
</div>
