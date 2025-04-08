@extends('layouts.simple')

@section('title', 'Gerador de Gráficos')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form id="dataForm" class="form-group">
                <div class="mb-3">
                    <label for="labels" class="form-label">Rótulos (separados por vírgula):</label>
                    <input type="text" id="labels" name="labels" class="form-control">
                    <div id="labelsError" class="text-danger"></div>
                </div>
                <div class="mb-3">
                    <label for="data" class="form-label">Dados (separados por vírgula):</label>
                    <input type="text" id="data" name="data" class="form-control">
                    <div id="dataError" class="text-danger"></div>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo de Gráfico:</label>
                    <select id="type" name="type" class="form-select">
                        <option value="bar">Gráfico de Barras</option>
                        <option value="line">Gráfico de Linhas</option>
                        <option value="pie">Gráfico de Pizza</option>
                    </select>
                </div>
                <button type="button" onclick="generateChart()" class="btn btn-primary">Gerar Gráfico</button>
                <button type="button" onclick="printChart()" class="btn btn-secondary">Imprimir Gráfico</button>
            </form>
            <div id="chartContainer" style="margin-top: 50px;">
                <canvas id="myChart" width="500" height="500"></canvas>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <style>
        @media print {
            #chartContainer {
                margin-top: 150px !important; /* Aumenta a margem superior para os rótulos */
            }
            #myChart {
                width: 800px !important; /* Reduz a largura do canvas para impressão */
                height: 800px !important; /* Reduz a altura do canvas para impressão */
            }
            .chartjs-datalabel {
                font-size: 12px !important; /* Ajusta o tamanho da fonte dos rótulos */
                font-weight: bold !important;
            }
        }
    </style>
    <script>
        let myChart = null; // Variável para armazenar a instância do gráfico
        const chartContainer = document.getElementById('chartContainer');

        function generateChart() {
            const labelsInput = document.getElementById('labels').value;
            const dataInput = document.getElementById('data').value;
            const typeInput = document.getElementById('type').value;

            // Limpar mensagens de erro anteriores
            document.getElementById('labelsError').textContent = '';
            document.getElementById('dataError').textContent = '';

            // Validação
            if (!labelsInput.trim() || !dataInput.trim()) {
                if (!labelsInput.trim()) {
                    document.getElementById('labelsError').textContent = 'Por favor, preencha os rótulos.';
                }
                if (!dataInput.trim()) {
                    document.getElementById('dataError').textContent = 'Por favor, preencha os dados.';
                }
                return;
            }

            const labels = labelsInput.split(',');
            const data = dataInput.split(',').map(Number);

            // Validação: mesmo número de rótulos e dados
            if (labels.length !== data.length) {
                document.getElementById('dataError').textContent = 'O número de rótulos e dados deve ser o mesmo.';
                return;
            }

            // Validação: dados são números
            if (data.some(isNaN)) {
                document.getElementById('dataError').textContent = 'Os dados devem ser números.';
                return;
            }

            // Limpar o gráfico anterior, se existir
            if (myChart) {
                myChart.destroy();
            }

            const ctx = document.getElementById('myChart').getContext('2d');
            myChart = new Chart(ctx, {
                type: typeInput,
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Dados',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 206, 86, 0.8)',
                            'rgba(75, 192, 192, 0.8)',
                            'rgba(153, 102, 255, 0.8)',
                            'rgba(255, 159, 64, 0.8)',
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 206, 86, 0.8)',
                            'rgba(75, 192, 192, 0.8)',
                            'rgba(153, 102, 255, 0.8)',
                            'rgba(255, 159, 64, 0.8)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true, // Mantém responsivo para a tela
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Gráfico Gerado'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let label = context.dataset.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    if (context.parsed !== null) {
                                        label += context.parsed.toFixed(2);
                                    }
                                    return label;
                                }
                            }
                        },
                        datalabels: {
                            formatter: (value, context) => {
                                if (typeInput === 'pie') {
                                    const datapoints = context.chart.data.datasets[0].data;
                                    const total = datapoints.reduce((total, datapoint) => total + datapoint, 0);
                                    const percentage = (value / total) * 100;
                                    return percentage.toFixed(2) + '%';
                                }
                                return value;
                            },
                            color: '#fff'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                },
                plugins: [ChartDataLabels]
            });
        }

        function printChart() {
            // Define o gráfico como não responsivo para impressão
            myChart.options.responsive = false;
            //myChart.resize(); // Remove o resize

            // Adiciona um pequeno atraso antes de imprimir
            setTimeout(() => {
                window.print();
                // Restaura o gráfico para o estado original após a impressão
                myChart.options.responsive = true;
                //myChart.resize(); // Remove o resize
            }, 500); // 500 milissegundos (meio segundo)
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
@endsection
