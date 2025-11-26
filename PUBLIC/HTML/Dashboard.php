<?php
    // =======================================================
    // MODO HACKATON: DATOS ESTATICOS (SIMULANDO BD)
    // =======================================================
    
    $id_usuario_actual = 1; 
    
    // Saldo simulado para que se vea dinero en pantalla
    $fondosTotal = "1,240.50"; 
    
    // Array de gastos simulado
    $gastos = [
        ['nombre' => 'Recolección PET', 'categoria' => 'Operativo', 'precioUnitario' => '0.50', 'cantidad' => 200, 'total' => '100.00'],
        ['nombre' => 'Mantenimiento Servidor', 'categoria' => 'Tecnología', 'precioUnitario' => '50.00', 'cantidad' => 1, 'total' => '50.00'],
        ['nombre' => 'Campaña Facebook', 'categoria' => 'Marketing', 'precioUnitario' => '120.00', 'cantidad' => 1, 'total' => '120.00'],
        ['nombre' => 'Logística Transporte', 'categoria' => 'Transporte', 'precioUnitario' => '15.00', 'cantidad' => 4, 'total' => '60.00'],
        ['nombre' => 'Incentivos Usuarios', 'categoria' => 'Comunidad', 'precioUnitario' => '10.00', 'cantidad' => 5, 'total' => '50.00']
    ];
?>

<!DOCTYPE html>
<html class="light" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dimesaur - Panel de Control</title>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1B4F4A", 
                        "secondary": "#DDAA33",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        /* Animación suave para el reporte */
        .fade-in { animation: fadeIn 0.5s ease-in-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-800 dark:text-slate-200">
    <div class="relative flex min-h-screen w-full">
        
        <aside class="flex flex-col w-64 bg-white dark:bg-[#143d39] shadow-md z-10 fixed h-full">
            <div class="flex items-center justify-center h-24 border-b border-gray-200 dark:border-gray-700 px-4">
                <div class="flex items-center gap-2">
                    <img src="../ASSETS/IMG/logodimesaur.png" alt="Logo" class="h-10 w-auto">
                    <img src="../ASSETS/IMG/dimesaurtext.png" alt="Dimesaur Texto" class="h-6 w-auto object-contain">
                </div>
            </div>

            <div class="flex flex-col flex-1 p-4 overflow-y-auto">
                <div class="flex items-center gap-4 px-3 py-4 mb-4 border-b border-gray-100 dark:border-gray-700">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 bg-gray-200 flex items-center justify-center">
                         <span class="material-symbols-outlined text-gray-500">person</span>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-gray-900 dark:text-white text-sm font-bold">Administrador</h2>
                        <p class="text-xs text-gray-500 dark:text-gray-300">Huánuco, Perú</p>
                    </div>
                </div>

                <nav class="flex-1 space-y-2">
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-[#1B4F4A]/10 text-[#1B4F4A] dark:text-white font-medium" href="#">
                        <span class="material-symbols-outlined">dashboard</span> Panel General
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-500 hover:bg-gray-100 dark:hover:bg-white/10 transition" href="#">
                        <span class="material-symbols-outlined">account_balance_wallet</span> Finanzas
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-500 hover:bg-gray-100 dark:hover:bg-white/10 transition" href="#">
                        <span class="material-symbols-outlined">recycling</span> Reciclaje
                    </a>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-500 hover:bg-gray-100 dark:hover:bg-white/10 transition" href="#">
                        <span class="material-symbols-outlined">psychology</span> Dimesaur AI
                    </a>
                </nav>

                <div class="mt-auto pt-4">
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-red-500 hover:bg-red-50 transition" href="pantallaInicio.html">
                        <span class="material-symbols-outlined">logout</span> Cerrar Sesión
                    </a>
                </div>
            </div>
        </aside>

        <main class="ml-64 flex-1 flex flex-col min-h-screen">
            <div class="flex-1 p-8 max-w-7xl mx-auto w-full">
                
                <div class="flex flex-wrap justify-between items-center gap-3 mb-8">
                    <div>
                        <h1 class="text-[#0d141b] dark:text-white text-3xl font-black tracking-tight">
                            Hola, Equipo Dimesaur 👋
                        </h1>
                        <p class="text-gray-500 text-sm mt-1">Resumen de operaciones en tiempo real.</p>
                    </div>
                    <button class="flex items-center gap-2 bg-[#1B4F4A] text-white px-5 py-2.5 rounded-full font-bold shadow-lg hover:bg-[#143d39] hover:shadow-xl transition transform hover:-translate-y-0.5">
                        <span class="material-symbols-outlined text-sm">add</span> Nuevo Gasto
                    </button>
                </div>

                <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 mb-8">
                    
                    <div class="relative overflow-hidden flex flex-col justify-between rounded-2xl bg-gradient-to-br from-[#1B4F4A] to-[#143d39] p-6 text-white lg:col-span-2 shadow-xl">
                        <div class="absolute right-0 top-0 opacity-10 -mr-4 -mt-4">
                            <span class="material-symbols-outlined text-[180px]">savings</span>
                        </div>
                        <div>
                            <p class="text-white/80 text-sm font-medium mb-1">FONDOS DISPONIBLES</p>
                            <p class="text-5xl font-black tracking-tighter">S/ <?php echo $fondosTotal; ?></p>
                        </div>
                        <div class="mt-6 flex items-center gap-2">
                            <span class="bg-white/20 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">trending_up</span> +12.5%
                            </span>
                            <span class="text-xs text-white/70">vs. el mes anterior</span>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-lg dark:border-slate-800 dark:bg-slate-900 lg:col-span-1">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-2">
                                <div class="p-2 bg-yellow-100 rounded-lg text-[#DDAA33]">
                                    <span class="material-symbols-outlined">auto_awesome</span>
                                </div>
                                <h3 class="font-bold text-lg text-gray-800 dark:text-white">Dimesaur AI</h3>
                            </div>
                            <span class="text-[10px] font-bold bg-gray-100 px-2 py-1 rounded text-gray-500">BETA</span>
                        </div>
                        
                        <div class="flex-1 bg-gray-50 rounded-xl p-4 mb-4 border border-dashed border-gray-300 relative overflow-hidden">
                            <div id="loadingIA" class="hidden absolute inset-0 bg-gray-50 flex flex-col items-center justify-center z-10">
                                <div class="animate-spin rounded-full h-6 w-6 border-b-2 border-[#1B4F4A] mb-2"></div>
                                <p class="text-xs font-bold text-[#1B4F4A] animate-pulse">Analizando Big Data...</p>
                            </div>
                            
                            <div id="contenidoIA" class="h-full flex items-center justify-center text-center">
                                <p class="text-gray-400 text-sm italic">"Solicita un análisis para ver insights..."</p>
                            </div>
                        </div>

                        <button onclick="ejecutarIA()" id="btnIA" class="w-full py-3 bg-[#DDAA33] hover:bg-[#c49526] text-white font-bold rounded-xl transition-all shadow-md active:scale-95">
                            GENERAR REPORTE
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <div class="lg:col-span-3 rounded-2xl border border-slate-200 bg-white p-6 shadow-lg dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">Tendencias de Reciclaje vs Gastos</h3>
                            <select class="text-xs border-gray-300 rounded-lg text-gray-500">
                                <option>Últimos 6 meses</option>
                                <option>Este año</option>
                            </select>
                        </div>
                        <div class="w-full h-72">
                            <canvas id="graficoFinanzas"></canvas>
                        </div>
                    </div>
                </div>

                <h2 class="text-[#0d141b] dark:text-white text-xl font-bold mb-4">Movimientos Recientes</h2>
                <div class="w-full overflow-hidden rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 shadow-md">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left">
                            <thead class="bg-gray-50 text-gray-500 font-semibold border-b border-gray-100">
                                <tr>
                                    <th class="px-6 py-4">Concepto</th>
                                    <th class="px-6 py-4">Categoría</th>
                                    <th class="px-6 py-4 text-right">Precio Unit.</th>
                                    <th class="px-6 py-4 text-right">Cant.</th>
                                    <th class="px-6 py-4 text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <?php foreach ($gastos as $gasto): ?>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 font-medium text-gray-900"><?= $gasto['nombre'] ?></td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center rounded-full bg-[#1B4F4A]/10 px-2.5 py-1 text-xs font-bold text-[#1B4F4A]">
                                            <?= $gasto['categoria'] ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right font-mono text-gray-600">S/ <?= $gasto['precioUnitario'] ?></td>
                                    <td class="px-6 py-4 text-right text-gray-500"><?= $gasto['cantidad'] ?></td>
                                    <td class="px-6 py-4 text-right font-bold text-gray-900">S/ <?= $gasto['total'] ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <footer class="bg-white border-t border-gray-200 py-6 mt-auto dark:bg-[#143d39] dark:border-gray-700">
                <div class="max-w-7xl mx-auto px-8 flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="flex items-center gap-2">
                         <img src="../ASSETS/IMG/dimesaurtext.png" alt="Dimesaur" class="h-4 opacity-50 grayscale">
                         <span class="text-xs text-gray-400">© 2025 Dimesaur Inc.</span>
                    </div>
                    <div class="flex gap-6 text-xs text-gray-400 font-medium">
                        <a href="#" class="hover:text-[#1B4F4A] transition">Política de Privacidad</a>
                        <a href="#" class="hover:text-[#1B4F4A] transition">Términos de Servicio</a>
                        <a href="#" class="hover:text-[#1B4F4A] transition">Soporte</a>
                    </div>
                </div>
            </footer>
        </main>
    </div>

    <script>
        // 1. CONFIGURACIÓN DE LA IA CON RESPUESTAS RANDOM
        const respuestasIA = [
            "<strong>¡Alerta de Ahorro!</strong><br>El análisis detecta un gasto recurrente en transporte. Si optimizas la ruta norte, podrías ahorrar un <strong>15% mensual</strong>.",
            
            "<strong>Tendencia Positiva</strong><br>La recolección de plástico PET ha subido un <strong>30%</strong> esta semana. Se recomienda lanzar una campaña de incentivos el fin de semana.",
            
            "<strong>Anomalía Financiera</strong><br>Se ha detectado una desviación en el presupuesto de 'Marketing'. El costo por click es más alto de lo habitual hoy.",
            
            "<strong>Predicción Semanal</strong><br>Basado en el clima y eventos locales, se espera un aumento del <strong>25% en residuos</strong> este sábado. Prepara la logística.",
            
            "<strong>Optimización de Recursos</strong><br>El 40% de tus fondos están estáticos. Dimesaur sugiere reinvertir S/ 500.00 en contenedores inteligentes para maximizar el ROI."
        ];

        function ejecutarIA() {
            const btn = document.getElementById('btnIA');
            const load = document.getElementById('loadingIA');
            const content = document.getElementById('contenidoIA');

            // UI Loading
            btn.disabled = true;
            btn.classList.add('opacity-50', 'cursor-not-allowed');
            btn.innerText = "PROCESANDO...";
            load.classList.remove('hidden');
            
            // Simulación Delay
            setTimeout(() => {
                load.classList.add('hidden');
                
                // SELECCIÓN RANDOM DE RESPUESTA
                const respuestaRandom = respuestasIA[Math.floor(Math.random() * respuestasIA.length)];
                
                content.innerHTML = `<div class='text-left text-xs text-gray-700 fade-in'>${respuestaRandom}</div>`;
                
                btn.disabled = false;
                btn.classList.remove('opacity-50', 'cursor-not-allowed');
                btn.innerText = "GENERAR NUEVO REPORTE";
            }, 2000); // 2 segundos de espera
        }

        // 2. GRÁFICOS CHART.JS
        const ctx = document.getElementById('graficoFinanzas').getContext('2d');
        
        // Gradiente bonito
        let gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(27, 79, 74, 0.2)');
        gradient.addColorStop(1, 'rgba(27, 79, 74, 0)');

        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
                datasets: [{
                    label: 'Reciclaje (Kg)',
                    data: [300, 450, 320, 600, 750, 900],
                    borderColor: '#1B4F4A',
                    backgroundColor: gradient,
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#1B4F4A',
                    pointRadius: 5
                },
                {
                    label: 'Gasto Operativo (S/)',
                    data: [200, 300, 250, 400, 380, 420],
                    borderColor: '#DDAA33',
                    backgroundColor: 'transparent',
                    borderDash: [5, 5],
                    tension: 0.4,
                    pointRadius: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'top', align: 'end' }
                },
                scales: {
                    y: { beginAtZero: true, grid: { borderDash: [2, 4], color: '#f0f0f0' } },
                    x: { grid: { display: false } }
                }
            }
        });
    </script>
</body>
</html>