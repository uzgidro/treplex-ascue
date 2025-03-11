<div class="card w-100 overflow-hidden mt-1" style="backdrop-filter: blur(5px);">
    <div class="card-body">
        <div class="row g-1 g-sm-3 lh-1">
<div id="chartdiv"></div>
        </div>
    </div>
</div>
<script>
    am5.ready(function () {
        // Создаем корневой элемент графика
        var root = am5.Root.new("chartdiv");

        // Устанавливаем тему
        root.setThemes([
            am5themes_Animated.new(root)
        ]);

        // Создаем контейнер для графика
        var chart = root.container.children.push(
            am5xy.XYChart.new(root, {
                panX: false,
                panY: false,
                wheelX: "none",
                wheelY: "none"
            })
        );

        // Добавляем данные
        var data = [
            { name: "Monica", steps: 45688 },
            { name: "Joey", steps: 35781 },
            { name: "Ross", steps: 25464 },
            { name: "Phoebe", steps: 18788 },
            { name: "Rachel", steps: 15465 },
            { name: "Chandler", steps: 11561 }
        ];

        // Создаем ось Y (категории)
        var yAxis = chart.yAxes.push(
            am5xy.CategoryAxis.new(root, {
                categoryField: "name",
                renderer: am5xy.AxisRendererY.new(root, {})
            })
        );

        yAxis.data.setAll(data);

        // Создаем ось X (значения)
        var xAxis = chart.xAxes.push(
            am5xy.ValueAxis.new(root, {
                min: 0,
                renderer: am5xy.AxisRendererX.new(root, {})
            })
        );

        // Создаем серию данных
        var series = chart.series.push(
            am5xy.ColumnSeries.new(root, {
                name: "Steps",
                xAxis: xAxis,
                yAxis: yAxis,
                valueXField: "steps",
                categoryYField: "name"
            })
        );

        series.data.setAll(data);

        // Добавляем движущиеся пули
        series.bullets.push(function () {
            var circle = am5.Circle.new(root, {
                radius: 5,
                fill: am5.color(0xff0000),
                stroke: am5.color(0xffffff),
                strokeWidth: 2
            });

            return am5.Bullet.new(root, {
                sprite: circle,
                locationX: 0 // Начальная позиция пули
            });
        });

        // Анимация движения пуль
        series.events.on("datavalidated", function () {
            series.data.each(function (dataItem) {
                var bullet = dataItem.get("bullet");
                if (bullet) {
                    var sprite = bullet.get("sprite");
                    sprite.animate({
                        key: "locationX",
                        to: 1, // Конечная позиция пули
                        duration: 2000, // Длительность анимации в миллисекундах
                        easing: am5.ease.out(am5.ease.cubic)
                    });
                }
            });
        });

        // Добавляем заголовок
        var title = chart.children.push(
            am5.Label.new(root, {
                text: "Steps by Characters",
                fontSize: 20,
                fontWeight: "bold",
                x: am5.percent(50),
                centerX: am5.percent(50)
            })
        );
    });
</script>

