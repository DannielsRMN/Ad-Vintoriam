<!DOCTYPE html>

<html class="light" lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Gestión de Ingresos - Plataforma Financiera</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1B4F4A",
                        "background-light": "#F8F9FA",
                        "background-dark": "#101922",
                        "text-light": "#495057",
                        "text-dark": "#E0E0E0",
                        "surface-light": "#FFFFFF",
                        "surface-dark": "#1F2937",
                        "border-light": "#DEE2E6",
                        "border-dark": "#4B5563"
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
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
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
                        <span class="material-symbols-outlined">trending_down</span>
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
<main class="flex-1 p-6 lg:p-10">
<div class="mx-auto max-w-4xl">
<!-- PageHeading -->
<header class="mb-8">
<p class="text-text-light dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">Gestión de Ingresos</p>
</header>
<div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
<!-- Form Section -->
<section class="lg:col-span-3">
<div class="bg-surface-light dark:bg-surface-dark p-6 rounded-lg shadow-sm border border-border-light dark:border-border-dark">
<!-- SectionHeader -->
<h2 class="text-text-light dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] pb-6">Registra un Nuevo Ingreso</h2>
<form class="space-y-6">
<!-- TextField: Monto -->
<div class="flex flex-col">
<label class="text-base font-medium leading-normal pb-2 text-text-light dark:text-text-dark" for="monto">Monto (S/)</label>
<input class="form-input w-full rounded-DEFAULT text-text-light dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary h-12 placeholder:text-text-light/70 px-4 text-base font-normal leading-normal" id="monto" placeholder="0.00" type="number"/>
</div>
<!-- TextField (Select): Tipo de Ingreso -->
<div class="flex flex-col">
<label class="text-base font-medium leading-normal pb-2 text-text-light dark:text-text-dark" for="tipo-ingreso">Tipo de Ingreso</label>
<select class="form-select w-full rounded-DEFAULT text-text-light dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary h-12 px-4 text-base font-normal leading-normal" id="tipo-ingreso">
<option>Seleccionar tipo</option>
<option value="salario">Salario</option>
<option value="regalo">Regalo</option>
<option value="otro">Otro</option>
</select>
</div>
<!-- TextField (Textarea): Descripción -->
<div class="flex flex-col">
<label class="text-base font-medium leading-normal pb-2 text-text-light dark:text-text-dark" for="descripcion">Descripción (Opcional)</label>
<textarea class="form-textarea w-full rounded-DEFAULT text-text-light dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark focus:border-primary placeholder:text-text-light/70 px-4 py-3 text-base font-normal leading-normal" id="descripcion" placeholder="Ej: Salario mensual de Octubre" rows="3"></textarea>
</div>
<!-- Button -->
<button class="w-full bg-primary text-white font-bold py-3 px-4 rounded-DEFAULT hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary dark:focus:ring-offset-background-dark transition-colors duration-200" type="submit">Guardar Ingreso</button>
</form>
</div>
</section>
<!-- Recent Incomes Section -->
<section class="lg:col-span-2">
<div class="bg-surface-light dark:bg-surface-dark p-6 rounded-lg shadow-sm h-full border border-border-light dark:border-border-dark">
<h2 class="text-text-light dark:text-white text-xl font-bold leading-tight tracking-[-0.015em] pb-6">Ingresos Recientes</h2>
<div class="space-y-4">
<!-- Recent Income Card 1 -->
<div class="flex items-center justify-between p-4 rounded-DEFAULT bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark">
<div class="flex items-center gap-4">
<div class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-300">
<span class="material-symbols-outlined">work</span>
</div>
<div>
<p class="font-semibold text-text-light dark:text-white">Salario</p>
<p class="text-sm text-text-light/80 dark:text-text-dark/80">15 de Oct, 2023</p>
</div>
</div>
<p class="font-bold text-lg text-primary">S/ 1,500.00</p>
</div>
<!-- Recent Income Card 2 -->
<div class="flex items-center justify-between p-4 rounded-DEFAULT bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark">
<div class="flex items-center gap-4">
<div class="flex h-10 w-10 items-center justify-center rounded-full bg-yellow-100 dark:bg-yellow-900/50 text-yellow-600 dark:text-yellow-300">
<span class="material-symbols-outlined">card_giftcard</span>
</div>
<div>
<p class="font-semibold text-text-light dark:text-white">Regalo</p>
<p class="text-sm text-text-light/80 dark:text-text-dark/80">12 de Oct, 2023</p>
</div>
</div>
<p class="font-bold text-lg text-primary">S/ 200.00</p>
</div>
<!-- Recent Income Card 3 -->
<div class="flex items-center justify-between p-4 rounded-DEFAULT bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark">
<div class="flex items-center gap-4">
<div class="flex h-10 w-10 items-center justify-center rounded-full bg-purple-100 dark:bg-purple-900/50 text-purple-600 dark:text-purple-300">
<span class="material-symbols-outlined">receipt_long</span>
</div>
<div>
<p class="font-semibold text-text-light dark:text-white">Otro</p>
<p class="text-sm text-text-light/80 dark:text-text-dark/80">10 de Oct, 2023</p>
</div>
</div>
<p class="font-bold text-lg text-primary">S/ 50.00</p>
</div>
</div>
</div>
</section>
</div>
</div>
</main>
</div>
</body></html>