    Nombre:
    <input type="text" name="name" id="name" value="{{ isset($owner)?$owner->full_name:'' }}" /><br />
    Edad:
    <input type="number" name="age" id="age" value="{{ isset($owner)?$owner->age:'' }}" /><br />
    Correo: 
    <input type="text" name="email" id="email" value="{{ isset($owner)?$owner->email:'' }}"><br />
    <button type="submit">Guardar</button>
