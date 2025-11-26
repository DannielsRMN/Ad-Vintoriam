<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Configuración de la Cuenta | Dimesaur</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#10B981",
                        "secondary": "#F59E0B",
                        "background-light": "#F8F9FA",
                        "background-dark": "#101922",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1E2A3A",
                        "text-light-primary": "#1E2A3A",
                        "text-dark-primary": "#F8F9FA",
                        "text-light-secondary": "#6b7280",
                        "text-dark-secondary": "#9ca3af",
                        "border-light": "#e5e7eb",
                        "border-dark": "#374151"
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
</head>
<body class="font-display bg-background-light dark:bg-background-dark">
<div class="relative flex min-h-screen w-full">
    <aside class="flex flex-col w-64 bg-surface-light dark:bg-surface-dark shadow-md">
        <div class="flex items-center justify-center h-20 border-b border-border-light dark:border-border-dark">
            <div class="flex items-center gap-3 text-primary">
                <img src="img/LOGO.png" alt="Logo de Dimesaur" class="h-8 w-auto">
                <h1 class="text-xl font-black text-text-light-primary dark:text-text-dark-primary">Dimesaur</h1>
            </div>
        </div>
        <div class="flex flex-col flex-1 p-4">
            <div class="flex items-center gap-4 px-3 py-4">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-12" data-alt="Avatar de usuario" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuADSOkR8FqicP9JgjcNyQKqEJ50chkETIlyqYRzn9eWzQmM_qXNCKVPxr6H0uGjLH5JvgkXaxv37P-PbSteqgSd1w3pyDoyGxnUSw6oVs6ThqsJR0fc8SlGdbQOIbYr5bQ1yAy7VDo8pal1SPdw8epwqAUZ1IrxxxWmrJ2KMpT6gx6WUepbistBGNWME3AvT7y5gQxgsAl0UhVeBAyulWyibkBlVTOALImSheXj41zmAerTqubVLr7N4FRWHL_u4W5s14tx2DJ7vA");'></div>
                <div class="flex flex-col">
                    <h2 class="text-text-light-primary dark:text-text-dark-primary text-base font-semibold leading-normal">Usuario</h2>
                    <p class="text-text-light-secondary dark:text-text-dark-secondary text-sm font-normal leading-normal">Huánuco</p>
                </div>
            </div>
            <nav class="flex-1 mt-6">
                <div class="flex flex-col gap-2">
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-light-secondary dark:text-text-dark-secondary hover:bg-primary/10 hover:text-primary dark:hover:text-primary transition-colors" href="Dashboard.php">
                        <span class="material-symbols-outlined">home</span>
                        <p class="text-sm font-medium leading-normal">Inicio</p>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-light-secondary dark:text-text-dark-secondary hover:bg-primary/10 hover:text-primary dark:hover:text-primary transition-colors" href="#">
                        <span class="material-symbols-outlined">trending_down</span>
                        <p class="text-sm font-medium leading-normal">Gastos</p>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-light-secondary dark:text-text-dark-secondary hover:bg-primary/10 hover:text-primary dark:hover:text-primary transition-colors" href="#">
                        <span class="material-symbols-outlined">trending_up</span>
                        <p class="text-sm font-medium leading-normal">Ingresos</p>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-text-light-secondary dark:text-text-dark-secondary hover:bg-primary/10 hover:text-primary dark:hover:text-primary transition-colors" href="#">
                        <span class="material-symbols-outlined">bar_chart</span>
                        <p class="text-sm font-medium leading-normal">Reportes</p>
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-primary/10 text-primary" href="#">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">settings</span>
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
    <main class="flex-1 p-6 lg:p-10">
        <div class="max-w-4xl mx-auto">
            <header class="mb-8">
                <div class="flex flex-col gap-2">
                    <h1 class="text-text-light-primary dark:text-text-dark-primary text-4xl font-black tracking-tighter">Configuración de la Cuenta</h1>
                    <p class="text-text-light-secondary dark:text-text-dark-secondary text-lg">Gestiona tu perfil, presupuesto y seguridad.</p>
                </div>
            </header>
            
            <div class="bg-surface-light dark:bg-surface-dark p-6 sm:p-8 rounded-xl shadow-sm border border-border-light dark:border-border-dark mb-8">
                <h2 class="text-text-light-primary dark:text-text-dark-primary text-2xl font-bold tracking-tight mb-6">Datos del Usuario</h2>
                
                <form id="form-configuracion" onsubmit="handleUpdate(event)">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <div class="col-span-1 md:col-span-2">
                            <label class="flex flex-col w-full">
                                <p class="text-text-light-primary dark:text-text-dark-primary text-sm font-medium leading-normal pb-2">Nombre de Usuario</p>
                                <input id="id_username" name="username" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light-primary dark:text-text-dark-primary focus:outline-none focus:ring-2 focus:ring-primary border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark h-12 placeholder:text-text-light-secondary dark:placeholder:text-text-dark-secondary px-4 text-base font-normal leading-normal transition-colors" placeholder="Usuario Actual" value="Usuario"/>
                            </label>
                        </div>
                        
                        <div>
                            <label class="flex flex-col w-full">
                                <p class="text-text-light-primary dark:text-text-dark-primary text-sm font-medium leading-normal pb-2">Nueva Contraseña</p>
                                <input id="id_password" name="password" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light-primary dark:text-text-dark-primary focus:outline-none focus:ring-2 focus:ring-primary border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark h-12 placeholder:text-text-light-secondary dark:placeholder:text-text-dark-secondary px-4 text-base font-normal leading-normal transition-colors" placeholder="•••••••• (dejar vacío si no quieres cambiar)" type="password" value=""/>
                            </label>
                        </div>
                        <div>
                            <label class="flex flex-col w-full">
                                <p class="text-text-light-primary dark:text-text-dark-primary text-sm font-medium leading-normal pb-2">Confirmar Nueva Contraseña</p>
                                <input id="id_confirm_password" name="confirm_password" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light-primary dark:text-text-dark-primary focus:outline-none focus:ring-2 focus:ring-primary border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark h-12 placeholder:text-text-light-secondary dark:placeholder:text-text-dark-secondary px-4 text-base font-normal leading-normal transition-colors" placeholder="••••••••" type="password" value=""/>
                            </label>
                        </div>

                        <div>
                            <label class="flex flex-col w-full">
                                <p class="text-text-light-primary dark:text-text-dark-primary text-sm font-medium leading-normal pb-2">Nombre Completo</p>
                                <input id="id_fullname" name="fullname" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light-primary dark:text-text-dark-primary focus:outline-none focus:ring-2 focus:ring-primary border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark h-12 placeholder:text-text-light-secondary dark:placeholder:text-text-dark-secondary px-4 text-base font-normal leading-normal transition-colors" placeholder="Ej: Juan Pérez" value="Usuario"/>
                            </label>
                        </div>
                        <div>
                            <label class="flex flex-col w-full">
                                <p class="text-text-light-primary dark:text-text-dark-primary text-sm font-medium leading-normal pb-2">Teléfono</p>
                                <input id="id_telefono" name="telefono" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light-primary dark:text-text-dark-primary focus:outline-none focus:ring-2 focus:ring-primary border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark h-12 placeholder:text-text-light-secondary dark:placeholder:text-text-dark-secondary px-4 text-base font-normal leading-normal transition-colors" placeholder="Ej: 987654321" type="tel" maxlength="9" value=""/>
                            </label>
                        </div>
                        
                        <div class="relative">
                            <label class="flex flex-col w-full">
                                <p class="text-text-light-primary dark:text-text-dark-primary text-sm font-medium leading-normal pb-2">Límite de Gasto Diario</p>
                                <span class="pointer-events-none absolute bottom-3 left-3 flex items-center text-text-light-secondary dark:text-text-dark-secondary">S/</span>
                                <input id="id_limiteDiario" name="limiteDiario" class="form-input pl-8 flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light-primary dark:text-text-dark-primary focus:outline-none focus:ring-2 focus:ring-primary border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark h-12 placeholder:text-text-light-secondary dark:placeholder:text-text-dark-secondary px-4 text-base font-normal leading-normal transition-colors" placeholder="100.00" type="number" step="0.01" value=""/>
                            </label>
                        </div>
                        <div class="relative">
                            <label class="flex flex-col w-full">
                                <p class="text-text-light-primary dark:text-text-dark-primary text-sm font-medium leading-normal pb-2">Presupuesto Mensual</p>
                                <span class="pointer-events-none absolute bottom-3 left-3 flex items-center text-text-light-secondary dark:text-text-dark-secondary">S/</span>
                                <input id="id_presupuesto" name="presupuesto" class="form-input pl-8 flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light-primary dark:text-text-dark-primary focus:outline-none focus:ring-2 focus:ring-primary border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark h-12 placeholder:text-text-light-secondary dark:placeholder:text-text-dark-secondary px-4 text-base font-normal leading-normal transition-colors" placeholder="2500.00" type="number" step="0.01" value=""/>
                            </label>
                        </div>
                        
                        <div class="relative">
                            <label class="flex flex-col w-full">
                                <p class="text-text-light-primary dark:text-text-dark-primary text-sm font-medium leading-normal pb-2">Fondos Total</p>
                                <span class="pointer-events-none absolute bottom-3 left-3 flex items-center text-text-light-secondary dark:text-text-dark-secondary">S/</span>
                                <input id="id_fondosTotal" name="fondosTotal" class="form-input pl-8 flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light-primary dark:text-text-dark-primary focus:outline-none focus:ring-2 focus:ring-primary border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark h-12 placeholder:text-text-light-secondary dark:placeholder:text-text-dark-secondary px-4 text-base font-normal leading-normal transition-colors" placeholder="0.00" type="number" step="0.01" value="0.00"/>
                            </label>
                        </div>
                        <div>
                            <label class="flex flex-col w-full">
                                <p class="text-text-light-primary dark:text-text-dark-primary text-sm font-medium leading-normal pb-2">Día del Mes para Reporte</p>
                                <input id="id_diaReporte" name="diaReporte" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light-primary dark:text-text-dark-primary focus:outline-none focus:ring-2 focus:ring-primary border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark h-12 placeholder:text-text-light-secondary dark:placeholder:text-text-dark-secondary px-4 text-base font-normal leading-normal transition-colors" max="31" min="1" placeholder="Ej: 28" type="number" value=""/>
                            </label>
                        </div>

                    </div>
                    <div class="mt-8 flex justify-end">
                        <button type="submit" class="flex items-center justify-center gap-2 h-11 px-6 bg-primary text-white rounded-lg text-sm font-semibold hover:bg-primary/90 transition-colors focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-surface-dark">
                            Guardar Cambios
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </main>
</div>
<div id="toast-success" class="fixed top-5 right-5 bg-primary text-white py-3 px-5 rounded-lg shadow-lg flex items-center gap-3 opacity-0 transition-opacity duration-300 pointer-events-none" role="alert">
    <span class="material-symbols-outlined">check_circle</span>
    <span>¡Perfil actualizado correctamente!</span>
</div>
<div id="toast-error" class="fixed top-5 right-5 bg-red-600 text-white py-3 px-5 rounded-lg shadow-lg flex items-center gap-3 opacity-0 transition-opacity duration-300 pointer-events-none" role="alert">
    <span class="material-symbols-outlined">error</span>
    <span>Error al actualizar.</span>
</div>

<script>
    function handleUpdate(event) {
        event.preventDefault(); // Evita el envío del formulario por defecto

        // 1. Obtener los valores de los campos
        const username = document.getElementById('id_username').value;
        const password = document.getElementById('id_password').value;
        const confirmPassword = document.getElementById('id_confirm_password').value; // Usado solo para validación en el cliente
        const fullname = document.getElementById('id_fullname').value;
        const limiteDiario = document.getElementById('id_limiteDiario').value;
        const presupuesto = document.getElementById('id_presupuesto').value;
        const telefono = document.getElementById('id_telefono').value;
        const fondosTotal = document.getElementById('id_fondosTotal').value;
        const diaReporte = document.getElementById('id_diaReporte').value;
        
        // 2. Validación de Contraseñas (Simulación)
        if (password !== confirmPassword) {
            showToast('error', 'Las contraseñas no coinciden.');
            return; 
        }

        // 3. Construir el objeto de datos para enviar al servidor
        const userData = {
            username: username, // Clave de búsqueda
            // Datos a actualizar
            password_hash: password, // El backend debería hashear esto
            fullname: fullname,
            limiteDiario: limiteDiario,
            presupuesto: presupuesto,
            telefono: telefono,
            fondosTotal: fondosTotal,
            fechaReporte: diaReporte
        };

        // 4. Simulación de la petición de actualización (UPDATE) al servidor
        console.log("Simulando envío de datos para actualizar:", userData);

        // Simulación de éxito después de un breve retraso
        setTimeout(() => {
            showToast('success', '¡Perfil actualizado correctamente!');
        }, 500);
    }
    
    function showToast(type, message) {
        const toastId = type === 'success' ? 'toast-success' : 'toast-error';
        const toast = document.getElementById(toastId);
        const messageSpan = toast.querySelector('span:last-child');
        
        // Asegurarse de que solo uno es visible
        document.getElementById('toast-success').style.opacity = '0';
        document.getElementById('toast-error').style.opacity = '0';

        messageSpan.textContent = message;
        toast.style.opacity = '1';
        
        // Ocultar el toast después de 4 segundos
        setTimeout(() => {
            toast.style.opacity = '0';
        }, 4000);
    }
</script>
</body>
</html>