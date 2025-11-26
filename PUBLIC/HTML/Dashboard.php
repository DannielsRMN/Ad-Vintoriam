<?php
    require_once "../../API/Conexion/Conexion.php";
    
    $id_usuario_actual = 1; 
    $fondosTotal = 0.00;
    $gastos = [];

    try {
        $conexion = new Conexion();
        $conn = $conexion->iniciar(); // Usaremos solo $conn para ambas consultas
        
        // =======================================================
        // PRIMERA CONSULTA: Obtener el Saldo Total (fondosTotal)
        // =======================================================
        $sql1 = "SELECT fondosTotal FROM usuario WHERE id = :id_user";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bindParam(':id_user', $id_usuario_actual, PDO::PARAM_INT);
        $stmt1->execute();
        $resultado = $stmt1->fetch(PDO::FETCH_ASSOC);
        
        if ($resultado && isset($resultado['fondosTotal'])) {
            $fondosTotal = $resultado['fondosTotal']; 
        }

        // =======================================================
        // SEGUNDA CONSULTA: Obtener el Historial de Gastos
        // NOTA: Asumí que tienes una tabla 'transacciones' o 'gastos'
        // =======================================================
        
        $sql2 = "SELECT descripcion, monto, fecha FROM transacciones WHERE idUsuario = :id_user ORDER BY fecha DESC LIMIT 5";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bindParam(':id_user', $id_usuario_actual, PDO::PARAM_INT);
        $stmt2->execute();
        
        $gastos = $stmt2->fetchAll(PDO::FETCH_ASSOC); 
        
    } catch (PDOException $e) {
        error_log("Error de base de datos en Dashboard: " . $e->getMessage());
    }
?>

<!DOCTYPE html>

<html class="light" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MiFinanza Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#2b8cee",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
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
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-800 dark:text-slate-200">
    <div class="relative flex min-h-screen w-full">
        <!-- SideNavBar -->
        <aside
            class="flex h-screen w-64 flex-col justify-between border-r border-slate-200 bg-white p-4 dark:border-slate-800 dark:bg-background-dark fixed top-0 left-0">
            <div class="flex flex-col gap-8">
                <div class="flex items-center gap-3 px-3 py-2">
                    <span class="material-symbols-outlined text-primary text-3xl">account_balance_wallet</span>
                    <h1 class="text-[#0d141b] dark:text-slate-100 text-lg font-bold">MiFinanza</h1>
                </div>
                <nav class="flex flex-col gap-2">
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/20 text-primary transition-colors hover:bg-primary/30"
                        href="#">
                        <span class="material-symbols-outlined">dashboard</span>
                        <p class="text-sm font-medium">Dashboard</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800"
                        href="#">
                        <span class="material-symbols-outlined">trending_up</span>
                        <p class="text-sm font-medium">Ingresos</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800"
                        href="#">
                        <span class="material-symbols-outlined">trending_down</span>
                        <p class="text-sm font-medium">Gastos</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800"
                        href="#">
                        <span class="material-symbols-outlined">bar_chart</span>
                        <p class="text-sm font-medium">Reportes</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800"
                        href="#">
                        <span class="material-symbols-outlined">double_arrow</span>
                        <p class="text-sm font-medium">Metas</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 transition-colors hover:bg-slate-100 dark:hover:bg-slate-800"
                        href="#">
                        <span class="material-symbols-outlined">wallet</span>
                        <p class="text-sm font-medium">Cuentas</p>
                    </a>
                </nav>
            </div>
            <div class="flex items-center gap-3 border-t border-slate-200 dark:border-slate-800 px-3 pt-4">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                    data-alt="Profile picture of Daniela"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAXUeU_dUhDLAGe7cRY3B_qb2kXSTkLlp8bdpnTCu9MIeNrqy73xv5mLQZBgbal-kCAbT08ClUgVWYngqvWXMSkdO-IQFLU_iF7nt4_BG5JFs0PoVihU75-WhPFi8PcZ68HxaardJvgoY8m95_mwT7aqvxOAxuTW_8npAa7-zBu9AWyAu1H0bpobbGabCDw7GcajVWoBa9WO-TwlS_RFVQhq4TbD1O7ofsAI5_fhlC_EiJzPR58-1dymjCgiCaeHjK36754InT9Ng");'>
                </div>
                <div class="flex flex-col">
                    <p class="text-slate-900 dark:text-slate-50 text-sm font-medium">Daniela</p>
                    <p class="text-slate-500 dark:text-slate-400 text-xs">Huánuco</p>
                </div>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="ml-64 w-[calc(100%-16rem)] flex-1 flex-col">
            <div class="mx-auto flex w-full max-w-4xl flex-col p-8">
                <!-- PageHeading -->
                <div class="flex flex-wrap justify-between gap-3 pb-8">
                    <p class="text-[#0d141b] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                        Hola, Daniela 👋</p>
                </div>
                <!-- Cards Grid -->
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
                    <!-- Balance Card -->
                    <div
                        class="flex flex-col items-start justify-center gap-4 rounded-xl bg-primary p-6 text-white lg:col-span-2">
                        <p class="opacity-80 text-base font-normal">Balance Total Actual</p>
                        <p class="text-5xl font-bold tracking-tighter"><?php echo $fondosTotal; ?></p>
                    </div>
                    <!-- Quick Actions Section -->
                    <div class="grid grid-cols-3 gap-4 lg:col-span-1 lg:grid-cols-1">
                        <!-- Registrar Gasto Card -->
                        <div
                            class="flex cursor-pointer flex-col items-center justify-center gap-3 rounded-xl border border-slate-200 bg-white p-4 text-center transition-transform hover:scale-105 hover:shadow-lg dark:border-slate-800 dark:bg-slate-900">
                            <div
                                class="flex size-12 items-center justify-center rounded-full bg-red-100 text-red-500 dark:bg-red-900/50 dark:text-red-400">
                                <span class="material-symbols-outlined">remove_circle_outline</span>
                            </div>
                            <p class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Registrar Gasto
                            </p>
                        </div>
                        <!-- Registrar Ingreso Card -->
                        <div
                            class="flex cursor-pointer flex-col items-center justify-center gap-3 rounded-xl border border-slate-200 bg-white p-4 text-center transition-transform hover:scale-105 hover:shadow-lg dark:border-slate-800 dark:bg-slate-900">
                            <div
                                class="flex size-12 items-center justify-center rounded-full bg-green-100 text-green-500 dark:bg-green-900/50 dark:text-green-400">
                                <span class="material-symbols-outlined">add_circle_outline</span>
                            </div>
                            <p class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Registrar
                                Ingreso</p>
                        </div>
                        <!-- Ver Reportes Card -->
                        <div
                            class="flex cursor-pointer flex-col items-center justify-center gap-3 rounded-xl border border-slate-200 bg-white p-4 text-center transition-transform hover:scale-105 hover:shadow-lg dark:border-slate-800 dark:bg-slate-900">
                            <div
                                class="flex size-12 items-center justify-center rounded-full bg-blue-100 text-blue-500 dark:bg-blue-900/50 dark:text-blue-400">
                                <span class="material-symbols-outlined">assessment</span>
                            </div>
                            <p class="text-slate-900 dark:text-white text-sm font-medium leading-normal">Ver Reportes
                            </p>
                        </div>
                    </div>
                </div>
                <!-- SectionHeader -->
                <h2
                    class="text-[#0d141b] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] pb-3 pt-10">
                    Historial del Día</h2>
                <!-- Recent Activity Table -->
                <div
                    class="w-full overflow-hidden rounded-xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead class="bg-slate-50 text-left text-slate-500 dark:bg-slate-950 dark:text-slate-400">
                                <tr>
                                    <th class="px-6 py-3 font-medium">Nombre</th>
                                    <th class="px-6 py-3 font-medium">Categoría</th>
                                    <th class="px-6 py-3 font-medium text-right">Precio/Unidad</th>
                                    <th class="px-6 py-3 font-medium text-right">Cantidad</th>
                                    <th class="px-6 py-3 font-medium text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                <tr class="text-slate-700 dark:text-slate-300">
                                    <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">Café en "El
                                        Buen Sabor"</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-900/50 dark:text-yellow-300">Comida</span>
                                    </td>
                                    <td class="px-6 py-4 text-right font-mono text-red-600 dark:text-red-400">- S/ 12.50</td>
                                    <td class="px-6 py-4 text-right text-slate-500 dark:text-slate-400">09:15 AM</td>
                                    <td class="px-6 py-4 text-right text-slate-500 dark:text-slate-400">09:15 AM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>