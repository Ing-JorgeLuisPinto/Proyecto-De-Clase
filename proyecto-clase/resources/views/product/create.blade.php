<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Agregar Producto</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
<style>
:root{
  --primary:#6C5CE7;
  --secondary:#00F5D4;
  --accent:#FF006E;
  --dark:#0f172a;
  --card:#111827;
}
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:'Poppins',sans-serif;background:linear-gradient(135deg,#020617,#0f172a,#020617);color:white;min-height:100vh;padding:40px}
.container{max-width:900px;margin:auto;background:var(--card);border-radius:20px;padding:30px;position:relative;border:1px solid rgba(255,255,255,.05)}
.container::before{content:"";position:absolute;inset:-2px;background:linear-gradient(120deg,var(--primary),var(--secondary),var(--accent));filter:blur(25px);opacity:.25;z-index:-1}
h1{text-align:center;margin-bottom:25px;background:linear-gradient(90deg,var(--primary),var(--secondary),var(--accent));-webkit-background-clip:text;-webkit-text-fill-color:transparent}
.form-grid{display:grid;grid-template-columns:1fr 1fr;gap:18px}
.full{grid-column:1/3}
label{font-size:.85rem;margin-bottom:6px;display:block;opacity:.8}
input,textarea,select{width:100%;padding:12px;border-radius:12px;border:1px solid rgba(255,255,255,.08);background:#020617;color:white}
textarea{resize:none;height:100px}
.preview{border:2px dashed rgba(255,255,255,.15);border-radius:16px;height:200px;display:flex;align-items:center;justify-content:center;color:#94a3b8;font-size:.9rem;overflow:hidden}
.preview img{width:100%;height:100%;object-fit:cover}
.actions{margin-top:25px;display:flex;justify-content:flex-end;gap:10px}
button{border:none;padding:12px 18px;border-radius:14px;font-weight:600;cursor:pointer;color:white}
.save{background:linear-gradient(90deg,var(--primary),var(--accent))}
.cancel{background:#020617;border:1px solid rgba(255,255,255,.1)}
button:hover{filter:brightness(1.2)}
</style>
</head>
<body>
<div class="container">
<h1>Agregar Nuevo Producto</h1>
<form id="form">
<div class="form-grid">
<div>
<label>ID Producto</label>
<input type="number" id="id" required>
</div>
<div>
<label>Nombre</label>
<input type="text" id="nombre" required>
</div>
<div>
<label>Precio</label>
<input type="number" id="precio" required>
</div>
<div>
<label>Estado</label>
<select id="estado">
<option value="true">Activo</option>
<option value="false">Inactivo</option>
</select>
</div>
<div class="full">
<label>Descripción</label>
<textarea id="descripcion" required></textarea>
</div>
<div class="full">
<label>Imagen URL</label>
<input type="text" id="imagen" placeholder="https://...">
</div>
<div class="full preview" id="preview">Vista previa de imagen</div>
</div>
<div class="actions">
<button type="reset" class="cancel">Cancelar</button>
<button type="submit" class="save">Guardar Producto</button>
</div>
</form>
</div>
<script>
const imgInput=document.getElementById('imagen');
const preview=document.getElementById('preview');
imgInput.addEventListener('input',()=>{
 if(imgInput.value){preview.innerHTML=`<img src="${imgInput.value}">`}else preview.textContent='Vista previa de imagen';
});

document.getElementById('form').addEventListener('submit',e=>{
 e.preventDefault();
 const producto={
  id:document.getElementById('id').value,
  nombre:document.getElementById('nombre').value,
  precio:document.getElementById('precio').value,
  descripcion:document.getElementById('descripcion').value,
  imagen:document.getElementById('imagen').value,
  estado:document.getElementById('estado').value
 };
 console.log('Producto guardado:',producto);
 alert('Producto agregado (simulado)');
});
</script>
</body>
</html>