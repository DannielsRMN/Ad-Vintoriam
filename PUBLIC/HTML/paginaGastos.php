<!DOCTYPE html>

<html class="light" lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Gestión de Gastos - Finanzas Huánuco</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,0" rel="stylesheet"/>
<script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {            
            "primary": "#1B4F4A",
            "secondary": "#F59E0B",
            "background-light": "#F8F9FA",
            "background-dark": "#101922",
            "surface-light": "#ffffff",
            "surface-dark": "#1E2A3A",
            "text-light": "#343A40",
            "text-dark": "#E5E7EB",
            "text-secondary-light": "#6C757D",
            "text-secondary-dark": "#9CA3AF",
            "border-light": "#DEE2E6",
            "border-dark": "#374151",
            "card-light": "#FFFFFF",
            "card-dark": "#1F2937",
            "success": "#28A745",
            "warning": "#FFC107",
            "danger": "#DC3545",
          },
          fontFamily: {
            "display": ["Inter", "sans-serif"]
          },
          borderRadius: {
            "DEFAULT": "0.5rem",
            "lg": "0.75rem",
            "xl": "1rem",
            "full": "9999px"
          },
        },
      },
    }
  </script>
<style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
    .material-symbols-outlined.fill {
        font-variation-settings: 'FILL' 1;
    }
  </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-text-light dark:text-text-dark">
<div class="relative flex min-h-screen w-full">
<!-- SideNavBar -->
    <aside class="flex flex-col w-64 bg-surface-light dark:bg-surface-dark shadow-md">
        <div class="flex items-center justify-center h-20 border-b border-border-light dark:border-border-dark">
            <div class="flex items-center gap-3 text-primary">
                <img src="../ASSETS/IMG/logodimesaur.png" alt="Logo de Dimesaur" class="h-8 w-auto">
                <h1 class="text-xl font-black text-text-light-primary dark:text-text-dark-primary">Dimesaur</h1>
            </div>
        </div>
        <div class="flex flex-col flex-1 p-4">
            <div class="flex items-center gap-4 px-3 py-4">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-12" data-alt="Avatar de usuario" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuADSOkR8FqicP9JgjcNyQKqEJ50chkETIlyqYRzn9eWzQmM_qXNCKVPxr6H0uGjLH5JvgkXaxv37P-PbSteqgSd1w3pyDoyGxnUSw6oVs6ThqsJR0fc8SlGdbQOIbYr5bQ1yAy7VDo8pal1SPdw8epwqAUZ1IrxxxWmrJ2KMpT6gx6WUepbistBGNWME3AvT7y5gQxgsAl0UhVeBAyulWyibkBlVTOALImSheXj41zmAerTqubVLr7N4FRWHL_u4W5s14tx2DJ7vA");'></div>
                <div class="flex flex-col">
                    <h2 class="text-text-light-primary dark:text-text-dark-primary text-base font-semibold leading-normal">Daniela</h2>
                    <p class="text-text-light-secondary dark:text-text-dark-secondary text-sm font-normal leading-normal">Huánuco</p>
                </div>
            </div>
            <nav class="flex-1 mt-6">
                <div class="flex flex-col gap-2">
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-light-secondary dark:text-text-dark-secondary hover:bg-primary/10 hover:text-primary dark:hover:text-primary transition-colors" href="Dashboard.php">
                        <span class="material-symbols-outlined">home</span>
                        <p class="text-sm font-medium leading-normal">Inicio</p>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-light-secondary dark:text-text-dark-secondary hover:bg-primary/10 hover:text-primary dark:hover:text-primary transition-colors" href="paginaGastos.php">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">trending_down</span>
                        <p class="text-sm font-medium leading-normal">Gastos</p>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-light-secondary dark:text-text-dark-secondary hover:bg-primary/10 hover:text-primary dark:hover:text-primary transition-colors" href="paginaIngresos.php">
                        <span class="material-symbols-outlined">trending_up</span>
                        <p class="text-sm font-medium leading-normal">Ingresos</p>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-light-secondary dark:text-text-dark-secondary hover:bg-primary/10 hover:text-primary dark:hover:text-primary transition-colors" href="paginaReportes.php">
                        <span class="material-symbols-outlined">bar_chart</span>
                        <p class="text-sm font-medium leading-normal">Reportes</p>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-light-secondary dark:text-text-dark-secondary hover:bg-primary/10 hover:text-primary dark:hover:text-primary transition-colors" href="paginaUsuario.php">
                        <span class="material-symbols-outlined">settings</span>
                        <p class="text-sm font-medium leading-normal">Configuración</p>
                    </a>
                </div>
            </nav>
            <div class="mt-auto">
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-light-secondary dark:text-text-dark-secondary hover:bg-red-500/10 hover:text-red-600 dark:hover:text-red-500 transition-colors" href="#">
                    <span class="material-symbols-outlined">logout</span>
                    <p class="text-sm font-medium leading-normal">Cerrar Sesión</p>
                </a>
            </div>
        </div>
    </aside>
<!-- Main Content -->
<main class="flex-1 p-8 overflow-y-auto">
<div class="max-w-7xl mx-auto">
<!-- PageHeading -->
<header class="mb-8">
<p class="text-4xl font-black leading-tight tracking-tight text-text-light dark:text-text-dark">Gestión de Gastos</p>
<p class="text-text-secondary-light dark:text-text-secondary-dark mt-1">Registra, visualiza y administra tus gastos personales.</p>
</header>
<!-- Form Section -->
<section class="mb-8">
<div class="bg-card-light dark:bg-card-dark p-6 rounded-xl shadow-sm border border-border-light dark:border-border-dark">
<h2 class="text-xl font-bold leading-tight tracking-tight mb-6 text-text-light dark:text-text-dark">Registrar Nuevo Gasto</h2>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Nombre del gasto -->
<label class="flex flex-col col-span-1 md:col-span-2">
<p class="text-sm font-medium leading-normal pb-2 text-text-secondary-light dark:text-text-secondary-dark">Nombre del gasto</p>
<input class="form-input w-full rounded-lg text-text-light dark:text-text-dark bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark focus:ring-2 focus:ring-primary/50 focus:border-primary h-12 px-4 placeholder:text-text-secondary-light/70 dark:placeholder:text-text-secondary-dark/70" placeholder="Ej. Almuerzo de trabajo" type="text"/>
</label>
<!-- Precio Unitario -->
<label class="flex flex-col col-span-1">
<p class="text-sm font-medium leading-normal pb-2 text-text-secondary-light dark:text-text-secondary-dark">Precio Unitario (S/.)</p>
<input class="form-input w-full rounded-lg text-text-light dark:text-text-dark bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark focus:ring-2 focus:ring-primary/50 focus:border-primary h-12 px-4 placeholder:text-text-secondary-light/70 dark:placeholder:text-text-secondary-dark/70" placeholder="15.00" step="0.01" type="number"/>
</label>
<!-- Cantidad -->
<label class="flex flex-col col-span-1">
<p class="text-sm font-medium leading-normal pb-2 text-text-secondary-light dark:text-text-secondary-dark">Cantidad</p>
<input class="form-input w-full rounded-lg text-text-light dark:text-text-dark bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark focus:ring-2 focus:ring-primary/50 focus:border-primary h-12 px-4 placeholder:text-text-secondary-light/70 dark:placeholder:text-text-secondary-dark/70" placeholder="1" type="number" value="1"/>
</label>
<!-- Descripción -->
<label class="flex flex-col col-span-1 md:col-span-2">
<p class="text-sm font-medium leading-normal pb-2 text-text-secondary-light dark:text-text-secondary-dark">Descripción (opcional)</p>
<textarea class="form-textarea w-full rounded-lg text-text-light dark:text-text-dark bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark focus:ring-2 focus:ring-primary/50 focus:border-primary p-4 min-h-24 resize-none placeholder:text-text-secondary-light/70 dark:placeholder:text-text-secondary-dark/70" placeholder="Detalles adicionales sobre el gasto"></textarea>
</label>
<!-- Categoría -->
<label class="flex flex-col col-span-1 md:col-span-2">
<p class="text-sm font-medium leading-normal pb-2 text-text-secondary-light dark:text-text-secondary-dark">Categoría</p>
<select class="form-select w-full rounded-lg text-text-light dark:text-text-dark bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark focus:ring-2 focus:ring-primary/50 focus:border-primary h-12 px-4">
<option>Transporte</option>
<option>Alimentación</option>
<option>Hogar y Vivienda</option>
<option>Ocio</option>
<option>Educación</option>
<option>Misceláneos</option>
<option>Internet</option>
<option>Luz</option>
<option>Agua</option>
<option>Telefonía</option>
</select>
</label>
</div>
<div class="flex justify-end mt-6">
<button class="flex items-center justify-center gap-2 h-12 px-6 rounded-lg bg-primary text-white font-semibold text-sm shadow-sm hover:bg-primary/90 transition-colors">
<span class="material-symbols-outlined">add_circle</span>
                Guardar Gasto
              </button>
</div>
</div>
</section>
<!-- Toast Notification -->
<div class="fixed top-8 right-8 bg-success text-white py-3 px-5 rounded-lg shadow-lg flex items-center gap-3 z-50">
<span class="material-symbols-outlined">check_circle</span>
<p class="text-sm font-medium">Gasto guardado exitosamente.</p>
</div>
<!-- Expenses List Section -->
<section>
<div class="bg-card-light dark:bg-card-dark p-6 rounded-xl shadow-sm border border-border-light dark:border-border-dark">
<h2 class="text-xl font-bold leading-tight tracking-tight mb-6 text-text-light dark:text-text-dark">Historial de Gastos</h2>
<!-- Filters -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
<div class="relative md:col-span-1">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-text-secondary-light dark:text-text-secondary-dark">search</span>
<input class="form-input w-full rounded-lg text-text-light dark:text-text-dark bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark focus:ring-2 focus:ring-primary/50 focus:border-primary h-11 pl-10 pr-4 placeholder:text-text-secondary-light/70 dark:placeholder:text-text-secondary-dark/70" placeholder="Buscar por nombre..." type="text"/>
</div>
<select class="form-select w-full rounded-lg text-text-light dark:text-text-dark bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark focus:ring-2 focus:ring-primary/50 focus:border-primary h-11 px-4 md:col-span-1">
<option value="">Filtrar por categoría</option>
<option>Transporte</option>
<option>Alimentación</option>
<option>Hogar y Vivienda</option>
</select>
<input class="form-input w-full rounded-lg text-text-light dark:text-text-dark bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark focus:ring-2 focus:ring-primary/50 focus:border-primary h-11 px-4 md:col-span-1" type="date"/>
</div>
<!-- Table -->
<div class="overflow-x-auto">
<table class="w-full text-sm text-left">
<thead class="text-xs text-text-secondary-light dark:text-text-secondary-dark uppercase bg-background-light dark:bg-background-dark">
<tr>
<th class="px-6 py-3 rounded-l-lg" scope="col">Nombre</th>
<th class="px-6 py-3" scope="col">Categoría</th>
<th class="px-6 py-3" scope="col">Monto Total</th>
<th class="px-6 py-3" scope="col">Fecha</th>
<th class="px-6 py-3 rounded-r-lg text-center" scope="col">Acciones</th>
</tr>
</thead>
<tbody>
<tr class="border-b border-border-light dark:border-border-dark">
<td class="px-6 py-4 font-medium text-text-light dark:text-text-dark whitespace-nowrap">Compra semanal en mercado</td>
<td class="px-6 py-4">Alimentación</td>
<td class="px-6 py-4">S/ 120.50</td>
<td class="px-6 py-4">2024-07-21</td>
<td class="px-6 py-4">
<div class="flex justify-center items-center gap-4">
<button class="text-warning hover:text-warning/80" title="Editar Gasto"><span class="material-symbols-outlined">edit</span></button>
<button class="text-danger hover:text-danger/80" title="Eliminar Gasto"><span class="material-symbols-outlined">delete</span></button>
</div>
</td>
</tr>
<tr class="border-b border-border-light dark:border-border-dark">
<td class="px-6 py-4 font-medium text-text-light dark:text-text-dark whitespace-nowrap">Recibo de Luz</td>
<td class="px-6 py-4">Hogar y Vivienda</td>
<td class="px-6 py-4">S/ 85.00</td>
<td class="px-6 py-4">2024-07-20</td>
<td class="px-6 py-4">
<div class="flex justify-center items-center gap-4">
<button class="text-warning hover:text-warning/80" title="Editar Gasto"><span class="material-symbols-outlined">edit</span></button>
<button class="text-danger hover:text-danger/80" title="Eliminar Gasto"><span class="material-symbols-outlined">delete</span></button>
</div>
</td>
</tr>
<tr class="border-b border-border-light dark:border-border-dark">
<td class="px-6 py-4 font-medium text-text-light dark:text-text-dark whitespace-nowrap">Pasajes en colectivo</td>
<td class="px-6 py-4">Transporte</td>
<td class="px-6 py-4">S/ 10.00</td>
<td class="px-6 py-4">2024-07-19</td>
<td class="px-6 py-4">
<div class="flex justify-center items-center gap-4">
<button class="text-warning hover:text-warning/80" title="Editar Gasto"><span class="material-symbols-outlined">edit</span></button>
<button class="text-danger hover:text-danger/80" title="Eliminar Gasto"><span class="material-symbols-outlined">delete</span></button>
</div>
</td>
</tr>
<tr class="border-b border-border-light dark:border-border-dark">
<td class="px-6 py-4 font-medium text-text-light dark:text-text-dark whitespace-nowrap">Entradas al cine</td>
<td class="px-6 py-4">Ocio</td>
<td class="px-6 py-4">S/ 30.00</td>
<td class="px-6 py-4">2024-07-18</td>
<td class="px-6 py-4">
<div class="flex justify-center items-center gap-4">
<button class="text-warning hover:text-warning/80" title="Editar Gasto"><span class="material-symbols-outlined">edit</span></button>
<button class="text-danger hover:text-danger/80" title="Eliminar Gasto"><span class="material-symbols-outlined">delete</span></button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>
</div>
</main>
</div>
</body></html>