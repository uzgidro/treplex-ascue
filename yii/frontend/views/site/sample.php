<?php
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

$this->title = '"Ўзбекгидроэнерго" АЖда электр энергия ишлаб чиқарилиши';
$this->params['breadcrumbs'][] = $this->title;

function Ges($number, $name, $url, $all) {
    return "
            <tr>
                <td>{$number}</td>
                <td><a class='link' href='{$url}'>{$name}</a></td>
                <td><span id='g{$number}'>0 МВт</span> <!--<span class='positive'>+4</span>--></td>
                <td>{$all} / <span id='true{$number}' style='color: #e93544'>0</span> / <span id='false{$number}' style='color: #1daf9c'>0</span> / <span style='color: #e6a819'>0</span></td>
                <td><span id='w{$number}'>0 м³/с</span></td>
                <td><a href='{$url}'><img src='".Url::to(['images/main/arrow-right.svg'])."' width='20' height='20' alt='right-arrow' /></a></td>
            </tr>";
}
?>

<div class="container-fluid">
    <div class="hero">
        <section class="hero-left">
            <div class="table-container">
                <svg
                    style="z-index: 1"
                    width="100%"
                    viewBox="0 0 1300 600"
                    height="100%"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    overflow="hidden"
                >
                    <defs>
                        <image
                            width="64"
                            height="64"
                            xlink:href="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCABAAEADASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwDj6/YOiivoc2zb+1OT3OXlv1vvbyXY8vA4H6nze9e9ultr+YUUUV88eoFFFFABRRRQAUUUUAFFFFAH4+V+wdFFfQ5tm39qcnucvLfrfe3kux5eBwP1Pm9697dLbX8wooor549Q/Hyv2Door6HNs2/tTk9zl5b9b728l2PLwOB+p83vXvbpba/mFFFFfPHqBRRRQAUUUUAFFFFABRRRQB+PlfsHRRX0ObZt/anJ7nLy3633t5LseXgcD9T5veve3S21/MKKKK+ePUP/2Q=="
                            preserveAspectRatio="none"
                            id="img0"
                        ></image>
                        <pattern
                            width="64"
                            height="64"
                            patternUnits="userSpaceOnUse"
                            id="pattern1"
                            overflow="hidden"
                            patternTransform="matrix(0.125 0 0 0.125 216 240)"
                        >
                            <use width="100%" height="100%" xlink:href="#img0"></use>
                        </pattern>
                        <clipPath id="clip2">
                            <rect x="0" y="0" width="104775" height="228600" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbBAMAAAACbYG8AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAPUExURQAAAP8AAP8AAP8AAP4AAGvGb7UAAAAFdFJOUwB//z+/TK8GtwAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAJhJREFUSMft1dsNgzAMQFHjMgBiApp2AMQEqPsP1ciOn0QsQPKXI67y+gBoTIXHh2bIiA3LwIEDBz4Bd4c/wY1R5zYQSg/XHmIPr/1W8ci4VJwz0j5zTZiW2glT346ZakaMNePk7Ku3FOuG6JcRfKm93SWH+vaN5NPwk5JHOQOiqxXB1YaH1YZotSHIJgPWfrngrLVD0BrwD7sXbqpEtQVyAAAAAElFTkSuQmCC"
                            preserveAspectRatio="none"
                            id="img3"
                        ></image>
                        <clipPath id="clip4">
                            <rect x="0" y="0" width="97971.4" height="228600" />
                        </clipPath>
                        <clipPath id="clip5">
                            <rect x="0" y="0" width="95250" height="219075" />
                        </clipPath>
                        <image
                            width="39"
                            height="91"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACcAAABbBAMAAAACbYG8AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAPUExURQAAACPbFSHaFCLbFCDbFHf/K8sAAAAFdFJOUwD/v38/zK3xaQAAAAlwSFlzAAAOwwAADsMBx2+oZAAAAKNJREFUSMft1UESgjAMheE+9QAGPQAewRvg/S9FQ3hp0i507TQr5qffAO2C4iN3XsEbZBnjW2Tj/abFPZqu08eXxtMz3rTRI2p6RC2yxmiaHkmfHv6SYanFq8dni67NI2vzR7yE+GD8hCiMsalHfkydxWLS6tFr9ei1ehyHk2fDoKvHoOuA25uj/Lwyb9Madt4/6usZzTjjjDP+WeRPSn8SpWAHbPs4v/nDGPsAAAAASUVORK5CYII="
                            preserveAspectRatio="none"
                            id="img6"
                        ></image>
                        <clipPath id="clip7">
                            <rect x="0" y="0" width="93889.3" height="219075" />
                        </clipPath>
                        <pattern
                            width="64"
                            height="64"
                            patternUnits="userSpaceOnUse"
                            id="pattern8"
                            overflow="hidden"
                            patternTransform="matrix(0.125 0 0 0.125 824 304)"
                        >
                            <use width="100%" height="100%" xlink:href="#img0"></use>
                        </pattern>
                    </defs>
                    <g>
                        <rect x="0" y="0" width="1280" height="720" fill="#FFFFFF" />
                        <path
                            d="M246.167 531 246.167 548.038 243.833 548.038 243.833 531ZM241 531C241 528.791 242.791 527 245 527 247.209 527 249 528.791 249 531 249 533.209 247.209 535 245 535 242.791 535 241 533.209 241 531Z"
                            fill="#FF0000"
                        />
                        <path
                            d="M1.16667-6.50664e-06 1.16677 18.8246-1.16656 18.8246-1.16667 6.50664e-06ZM-4 2.23085e-05C-4.00001-2.20912-2.20916-3.99999-2.23085e-05-4 2.20912-4.00001 3.99999-2.20916 4-2.23085e-05 4.00001 2.20912 2.20916 3.99999 2.23085e-05 4-2.20912 4.00001-3.99999 2.20916-4 2.23085e-05Z"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 245 584.825)"
                        />
                        <path
                            d="M231.5 159C231.5 153.753 235.753 149.5 241 149.5 246.247 149.5 250.5 153.753 250.5 159 250.5 164.247 246.247 168.5 241 168.5 235.753 168.5 231.5 164.247 231.5 159Z"
                            stroke="#000000"
                            stroke-width="0.333333"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M231.5 195C231.5 189.753 235.753 185.5 241 185.5 246.247 185.5 250.5 189.753 250.5 195 250.5 200.247 246.247 204.5 241 204.5 235.753 204.5 231.5 200.247 231.5 195Z"
                            stroke="#000000"
                            stroke-width="0.333333"
                            stroke-miterlimit="8"
                            fill="#92D050"
                            fill-rule="evenodd"
                        />
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(290.769 159)"
                        >
                            Оборудование в работе
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(292.838 196)"
                        >
                            оборудование в резерве
                        </text>
                        <path
                            d="M231.5 120.5C231.5 115.529 235.753 111.5 241 111.5 246.247 111.5 250.5 115.529 250.5 120.5 250.5 125.471 246.247 129.5 241 129.5 235.753 129.5 231.5 125.471 231.5 120.5Z"
                            stroke="#000000"
                            stroke-width="0.333333"
                            stroke-miterlimit="8"
                            fill="#FFFF00"
                            fill-rule="evenodd"
                        />
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(292.245 122)"
                        >
                            Оборудование в ремонте
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(291.442 91)"
                        >
                            Отдача энергия
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(289.802 56)"
                        >
                            Прием энергия (ативная)
                        </text>
                        <path
                            d="M216.5 267C216.5 253.469 227.469 242.5 241 242.5 254.531 242.5 265.5 253.469 265.5 267 265.5 280.531 254.531 291.5 241 291.5 227.469 291.5 216.5 280.531 216.5 267Z"
                            stroke="#800080"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="url(#pattern1)"
                            fill-rule="evenodd"
                        />
                        <g>
                            <g>
                                <g>
                                    <path
                                        d="M239.689 260.933 240.622 260.933 241.944 261.167 243.033 261.633 243.889 262.178 244.9 263.189 245.522 264.122 245.989 265.367 246.144 266.067 246.144 267.933 245.833 269.1 245.211 270.344 244.589 271.122 244.044 271.667 242.956 272.367 241.711 272.833 240.933 272.989 239.378 272.989 238.133 272.678 237.278 272.289 236.422 271.744 235.567 270.967 235.022 270.189 234.478 269.1 234.167 267.856 234.089 266.922 234.244 265.678 234.556 264.667 235.178 263.5 236.033 262.567 236.656 262.022 237.978 261.322 239.144 261.011Z"
                                    />
                                    <path
                                        d="M240.156 247.089 241.011 247.089 242.489 247.322 243.967 247.789 245.211 248.411 246.144 249.033 246.922 249.733 247.856 250.667 248.711 251.911 249.333 253.156 249.8 254.556 250.033 255.722 250.111 256.344 250.111 257.822 249.878 259.3 249.489 260.622 248.867 261.944 248.089 263.033 247.933 263.033 247.311 261.944 246.378 260.856 245.522 260.078 244.433 259.378 243.267 258.833 241.944 258.444 240.156 258.211Z"
                                    />
                                    <path
                                        d="M227.4 262.878 227.789 262.956 229.967 264.2 231.522 265.133 231.6 265.289 231.444 266.922 231.6 268.556 231.989 270.033 232.533 271.2 232.533 271.433 230.356 272.678 228.489 273.767 224.444 276.1 223.122 276.878 222.889 276.878 222.189 275.4 221.8 274.078 221.644 273.144 221.567 271.822 221.722 270.344 221.956 269.256 222.5 267.778 223.044 266.767 223.744 265.756 224.678 264.744 225.533 263.967 226.933 263.111Z"
                                    />
                                    <path
                                        d="M247.7 271.433 248.089 271.511 249.956 272.6 256.022 276.1 257.344 276.878 257.189 277.267 256.644 278.044 255.944 278.9 255.4 279.444 254.233 280.3 252.989 281 251.511 281.544 250.344 281.778 249.878 281.856 247.544 281.856 246.378 281.622 245.133 281.233 243.811 280.611 242.878 279.989 242.878 275.322 243.578 275.011 244.9 274.311 245.833 273.611 246.922 272.522Z"
                                    />
                                    <path
                                        d="M230.667 252.067 232.378 252.067 233.856 252.3 235.489 252.844 236.811 253.544 237.433 253.933 237.433 258.678 236.033 259.3 234.944 260 234.089 260.7 233.544 261.244 232.611 262.567 232.144 262.411 230.822 261.633 224.756 258.133 223.044 257.122 222.967 256.967 223.511 256.111 224.367 255.1 224.989 254.478 226.156 253.622 227.244 253 228.722 252.456 229.578 252.222Z"
                                    />
                                    <path
                                        d="M234.167 273.533 234.478 273.611 235.644 274.467 236.967 275.089 238.211 275.478 239.144 275.633 240.078 275.711 240.156 275.789 240.156 286.833 238.989 286.833 237.433 286.522 236.111 286.056 234.711 285.278 233.7 284.5 232.922 283.8 232.144 282.867 231.367 281.622 230.744 280.222 230.356 278.744 230.2 277.344 230.2 276.489 230.278 275.789 232.222 274.7 233.544 273.922Z"
                                    />
                                    <path
                                        d="M257.267 257.044 257.422 257.044 257.967 258.133 258.433 259.533 258.667 260.778 258.744 262.333 258.589 263.733 258.278 265.056 257.656 266.533 257.111 267.467 256.489 268.322 255.633 269.256 254.467 270.189 253.456 270.811 252.756 271.122 250.811 270.033 248.944 268.944 248.711 268.789 248.867 267.389 248.867 266.222 249.567 265.522 250.578 264.2 251.278 263.033 251.978 261.556 252.522 259.844 253.222 259.378 255.167 258.289 257.033 257.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        <path
                            d="M1.33333-8.00993e-06 1.33344 17.4761-1.33323 17.4761-1.33333 8.00993e-06ZM4.0001 17.4761C4.00012 19.6852 2.20927 21.4761 0.000129017 21.4761-2.20901 21.4761-3.99988 19.6853-3.99989 17.4761-3.99991 15.267-2.20906 13.4761 8.09571e-05 13.4761 2.20922 13.4761 4.00009 15.267 4.0001 17.4761Z"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 240.5 242.976)"
                        />
                        <path
                            d="M241.167 301.983 241.436 320.394 239.103 320.428 238.833 302.017ZM236 302.058C235.968 299.85 237.733 298.033 239.942 298 242.15 297.968 243.967 299.733 244 301.942 244.032 304.15 242.267 305.967 240.058 306 237.85 306.032 236.033 304.267 236 302.058Z"
                            fill="#FF0000"
                        />
                        <path
                            d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                            stroke="#7030A0"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 225.5 374.5)"
                        />
                        <path
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#4472C4"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 225.5 351.5)"
                        />
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(300.172 267)"
                        >
                            Гидроагрегат
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(291.73 344)"
                        >
                            Трансформатор
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(292.73 357)"
                        >
                            2х обмоточный
                        </text>
                        <path
                            d="M242.166 419.972 242.575 437.01 240.243 437.066 239.834 420.028ZM237.001 420.096C236.948 417.887 238.696 416.054 240.904 416.001 243.113 415.948 244.946 417.696 244.999 419.904 245.052 422.113 243.304 423.946 241.096 423.999 238.887 424.052 237.054 422.304 237.001 420.096Z"
                            fill="#FF0000"
                        />
                        <path
                            d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                            stroke="#BF9000"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 238.5 489.5)"
                        />
                        <path
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 226.5 467.5)"
                        />
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(294.172 467)"
                        >
                            Трансформатор
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(295.172 480)"
                        >
                            3х обмоточный
                        </text>
                        <path
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#FF0000"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 214.5 488.5)"
                        />
                        <path
                            d="M1.16595-0.0408583 1.57771 11.7093-0.754192 11.791-1.16595 0.0408583ZM-3.99755 0.140086C-4.07491-2.0677-2.34787-3.92018-0.140086-3.99755 2.0677-4.07491 3.92018-2.34787 3.99755-0.140086 4.07491 2.0677 2.34787 3.92018 0.140086 3.99755-2.0677 4.07491-3.92018 2.34787-3.99755 0.140086Z"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 253 500.75)"
                        />
                        <path
                            d="M1.16667-9.54703e-06 1.16677 12.8296-1.16656 12.8296-1.16667 9.54703e-06ZM-4 3.27327e-05C-4.00002-2.20911-2.20917-3.99998-3.27327e-05-4 2.20911-4.00002 3.99998-2.20917 4-3.27327e-05 4.00002 2.20911 2.20917 3.99998 3.27327e-05 4-2.20911 4.00002-3.99998 2.20917-4 3.27327e-05Z"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 229 500.83)"
                        />
                        <g
                            clip-path="url(#clip2)"
                            transform="matrix(0.000104987 0 0 0.000104987 235 40)"
                        >
                            <g
                                clip-path="url(#clip4)"
                                transform="matrix(1.06944 0 0 1 -0.25 -0.03125)"
                            >
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img3"
                                    transform="scale(2512.09 2512.09)"
                                ></use>
                            </g>
                        </g>
                        <g
                            clip-path="url(#clip5)"
                            transform="matrix(0.000104987 0 0 0.000104987 236 71)"
                        >
                            <g clip-path="url(#clip7)" transform="scale(1.01449 1)">
                                <use
                                    width="100%"
                                    height="100%"
                                    xlink:href="#img6"
                                    transform="scale(2407.42 2407.42)"
                                ></use>
                            </g>
                        </g>
                        <path
                            d="M1.16667-9.85369e-06 1.16677 12.4303-1.16656 12.4304-1.16667 9.85369e-06ZM-4 3.37841e-05C-4.00002-2.20911-2.20917-3.99998-3.37841e-05-4 2.20911-4.00002 3.99998-2.20917 4-3.37841e-05 4.00002 2.20911 2.20917 3.99998 3.37841e-05 4-2.20911 4.00002-3.99998 2.20917-4 3.37841e-05Z"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 241 386.43)"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="18"
                            height="18"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 236.5 566.5)"
                        />
                        <path
                            d="M0 0 71.3645 0.000104987"
                            stroke="#4472C4"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 590.865 86.5001)"
                        />
                        <path
                            d="M0 0 71.2344 0.000104987"
                            stroke="#990099"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 590.734 125.5)"
                        />
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(602.485 91)"
                        >
                            110 кВ голубой
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(602.775 130)"
                        >
                            10 кВ фиолетовый
                        </text>
                        <path
                            d="M0 0 71.3645 0.000104987"
                            stroke="#548235"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 590.865 157.5)"
                        />
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(602.775 162)"
                        >
                            6 кВ темно зеленый
                        </text>
                        <path
                            d="M0 0 71.3645 0.000104987"
                            stroke="#767171"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 590.865 192.5)"
                        />
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(602.485 196)"
                        >
                            0,4 кВ серый
                        </text>
                        <path
                            d="M0 0 71.3645 0.000104987"
                            stroke="#C4FF09"
                            stroke-width="3"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(-1 0 0 1 590.865 52.5001)"
                        />
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(602.485 51)"
                        >
                            220 кВ Желтозеленый
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(302.782 546)"
                        >
                            Выключатель
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(294.949 559)"
                        >
                            (автоматический
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(301.449 572)"
                        >
                            выключатель)
                        </text>
                        <path
                            d="M854.166 165.972 854.575 183.01 852.243 183.066 851.834 166.028ZM849.001 166.096C848.948 163.887 850.695 162.054 852.904 162.001 855.113 161.948 856.946 163.696 856.999 165.904 857.052 168.113 855.305 169.946 853.096 169.999 850.887 170.052 849.054 168.304 849.001 166.096Z"
                            fill="#FF0000"
                        />
                        <path
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#BF9000"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 851.5 235.5)"
                        />
                        <path
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 839.5 213.5)"
                        />
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(901.862 200)"
                        >
                            Диспетчерский наименование трансформатора
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(901.862 213)"
                        >
                            Класс напряжения
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(901.862 226)"
                        >
                            Мощность трансформатора
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(901.862 238)"
                        >
                            Модель трансформатора
                        </text>
                        <path
                            d="M0 15C-1.97336e-15 6.71573 6.93959-1.9097e-15 15.5-3.8194e-15 24.0604-7.6388e-15 31 6.71573 31 15 31 23.2843 24.0604 30 15.5 30 6.93959 30-9.86678e-15 23.2843 0 15Z"
                            stroke="#FF0000"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 826.5 234.5)"
                        />
                        <path
                            d="M1.16595-0.0408583 1.57771 11.7093-0.754192 11.791-1.16595 0.0408583ZM-3.99755 0.140086C-4.07491-2.0677-2.34787-3.92018-0.140086-3.99755 2.0677-4.07491 3.92018-2.34787 3.99755-0.140086 4.07491 2.0677 2.34787 3.92018 0.140086 3.99755-2.0677 4.07491-3.92018 2.34787-3.99755 0.140086Z"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 866 246.75)"
                        />
                        <path
                            d="M1.16667-9.54703e-06 1.16677 12.8296-1.16656 12.8296-1.16667 9.54703e-06ZM-4 3.27327e-05C-4.00002-2.20911-2.20917-3.99998-3.27327e-05-4 2.20911-4.00002 3.99998-2.20917 4-3.27327e-05 4.00002 2.20911 2.20917 3.99998 3.27327e-05 4-2.20911 4.00002-3.99998 2.20917-4 3.27327e-05Z"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 842 246.83)"
                        />
                        <path
                            d="M854.167 45.9829 854.436 64.3937 852.103 64.4278 851.833 46.0171ZM849 46.0585C848.968 43.8496 850.733 42.0327 852.942 42.0004 855.15 41.9681 856.967 43.7326 857 45.9415 857.032 48.1504 855.267 49.9673 853.058 49.9996 850.85 50.0319 849.033 48.2674 849 46.0585Z"
                            fill="#FF0000"
                        />
                        <path
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#7030A0"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 839.5 118.5)"
                        />
                        <path
                            d="M0 15C-1.9097e-15 6.71573 6.71573-1.9097e-15 15-3.8194e-15 23.2843-7.6388e-15 30 6.71573 30 15 30 23.2843 23.2843 30 15 30 6.71573 30-9.5485e-15 23.2843 0 15Z"
                            stroke="#4472C4"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="none"
                            fill-rule="evenodd"
                            transform="matrix(1 0 0 -1 839.5 95.5001)"
                        />
                        <path
                            d="M1.16667-9.85369e-06 1.16677 12.4303-1.16656 12.4304-1.16667 9.85369e-06ZM-4 3.37841e-05C-4.00002-2.20911-2.20917-3.99998-3.37841e-05-4 2.20911-4.00002 3.99998-2.20917 4-3.37841e-05 4.00002 2.20911 2.20917 3.99998 3.37841e-05 4-2.20911 4.00002-3.99998 2.20917-4 3.37841e-05Z"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 854 130.43)"
                        />
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(902.334 79)"
                        >
                            Диспетчерский наименование трансформатора
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(902.334 92)"
                        >
                            Класс напряжения
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(902.334 105)"
                        >
                            Мощность трансформатора
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(902.334 117)"
                        >
                            Модель трансформатора
                        </text>
                        <path
                            d="M827.5 332C827.5 318.469 838.469 307.5 852 307.5 865.531 307.5 876.5 318.469 876.5 332 876.5 345.531 865.531 356.5 852 356.5 838.469 356.5 827.5 345.531 827.5 332Z"
                            stroke="#FF0000"
                            stroke-width="1.33333"
                            stroke-miterlimit="8"
                            fill="url(#pattern8)"
                            fill-rule="evenodd"
                        />
                        <g>
                            <g>
                                <g>
                                    <path
                                        d="M850.689 325.933 851.622 325.933 852.944 326.167 854.033 326.633 854.889 327.178 855.9 328.189 856.522 329.122 856.989 330.367 857.144 331.067 857.144 332.933 856.833 334.1 856.211 335.344 855.589 336.122 855.044 336.667 853.956 337.367 852.711 337.833 851.933 337.989 850.378 337.989 849.133 337.678 848.278 337.289 847.422 336.744 846.567 335.967 846.022 335.189 845.478 334.1 845.167 332.856 845.089 331.922 845.244 330.678 845.556 329.667 846.178 328.5 847.033 327.567 847.656 327.022 848.978 326.322 850.144 326.011Z"
                                    />
                                    <path
                                        d="M851.156 312.089 852.011 312.089 853.489 312.322 854.967 312.789 856.211 313.411 857.144 314.033 857.922 314.733 858.856 315.667 859.711 316.911 860.333 318.156 860.8 319.556 861.033 320.722 861.111 321.344 861.111 322.822 860.878 324.3 860.489 325.622 859.867 326.944 859.089 328.033 858.933 328.033 858.311 326.944 857.378 325.856 856.522 325.078 855.433 324.378 854.267 323.833 852.944 323.444 851.156 323.211Z"
                                    />
                                    <path
                                        d="M838.4 327.878 838.789 327.956 840.967 329.2 842.522 330.133 842.6 330.289 842.444 331.922 842.6 333.556 842.989 335.033 843.533 336.2 843.533 336.433 841.356 337.678 839.489 338.767 835.444 341.1 834.122 341.878 833.889 341.878 833.189 340.4 832.8 339.078 832.644 338.144 832.567 336.822 832.722 335.344 832.956 334.256 833.5 332.778 834.044 331.767 834.744 330.756 835.678 329.744 836.533 328.967 837.933 328.111Z"
                                    />
                                    <path
                                        d="M858.7 336.433 859.089 336.511 860.956 337.6 867.022 341.1 868.344 341.878 868.189 342.267 867.644 343.044 866.944 343.9 866.4 344.444 865.233 345.3 863.989 346 862.511 346.544 861.344 346.778 860.878 346.856 858.544 346.856 857.378 346.622 856.133 346.233 854.811 345.611 853.878 344.989 853.878 340.322 854.578 340.011 855.9 339.311 856.833 338.611 857.922 337.522Z"
                                    />
                                    <path
                                        d="M841.667 317.067 843.378 317.067 844.856 317.3 846.489 317.844 847.811 318.544 848.433 318.933 848.433 323.678 847.033 324.3 845.944 325 845.089 325.7 844.544 326.244 843.611 327.567 843.144 327.411 841.822 326.633 835.756 323.133 834.044 322.122 833.967 321.967 834.511 321.111 835.367 320.1 835.989 319.478 837.156 318.622 838.244 318 839.722 317.456 840.578 317.222Z"
                                    />
                                    <path
                                        d="M845.167 338.533 845.478 338.611 846.644 339.467 847.967 340.089 849.211 340.478 850.144 340.633 851.078 340.711 851.156 340.789 851.156 351.833 849.989 351.833 848.433 351.522 847.111 351.056 845.711 350.278 844.7 349.5 843.922 348.8 843.144 347.867 842.367 346.622 841.744 345.222 841.356 343.744 841.2 342.344 841.2 341.489 841.278 340.789 843.222 339.7 844.544 338.922Z"
                                    />
                                    <path
                                        d="M868.267 322.044 868.422 322.044 868.967 323.133 869.433 324.533 869.667 325.778 869.744 327.333 869.589 328.733 869.278 330.056 868.656 331.533 868.111 332.467 867.489 333.322 866.633 334.256 865.467 335.189 864.456 335.811 863.756 336.122 861.811 335.033 859.944 333.944 859.711 333.789 859.867 332.389 859.867 331.222 860.567 330.522 861.578 329.2 862.278 328.033 862.978 326.556 863.522 324.844 864.222 324.378 866.167 323.289 868.033 322.2Z"
                                    />
                                </g>
                            </g>
                        </g>
                        <path
                            d="M1.33333-8.00993e-06 1.33344 17.4761-1.33323 17.4761-1.33333 8.00993e-06ZM4.0001 17.4761C4.00012 19.6852 2.20927 21.4761 0.000129017 21.4761-2.20901 21.4761-3.99988 19.6853-3.99989 17.4761-3.99991 15.267-2.20906 13.4761 8.09571e-05 13.4761 2.20922 13.4761 4.00009 15.267 4.0001 17.4761Z"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 851.5 307.976)"
                        />
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(902.406 303)"
                        >
                            Диспетчерский наименование трансформатора
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(902.406 316)"
                        >
                            Класс напряжения
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(902.406 329)"
                        >
                            Мощность трансформатора
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(902.406 341)"
                        >
                            Модель трансформатора
                        </text>
                        <path
                            d="M850.365 438.127 850.167 383.505 852.833 383.495 853.031 438.117ZM855.698 438.107C855.706 440.316 853.922 442.114 851.713 442.122 849.504 442.13 847.706 440.345 847.698 438.136 847.69 435.927 849.475 434.13 851.684 434.122 853.893 434.114 855.69 435.898 855.698 438.107ZM847.5 383.515C847.492 381.305 849.276 379.508 851.486 379.5 853.695 379.492 855.492 381.276 855.5 383.486 855.508 385.695 853.724 387.492 851.515 387.5 849.305 387.508 847.508 385.724 847.5 383.515Z"
                            fill="#4472C4"
                        />
                        <rect
                            x="0"
                            y="0"
                            width="19"
                            height="19"
                            stroke="#2E75B6"
                            stroke-width="2.66667"
                            stroke-miterlimit="8"
                            fill="#FF0000"
                            transform="matrix(1 0 0 -1 841.5 418.5)"
                        />
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(901.862 413)"
                        >
                            Диспетчерский наименование выключателя
                        </text>
                        <path
                            d="M1.33333-2.08996e-06 1.33343 61.6453-1.33324 61.6453-1.33333 2.08996e-06ZM9.66271e-05 61.6454 4.00009 58.9787 0.000104987 66.9787-3.99991 58.9787Z"
                            fill="#4472C4"
                            transform="matrix(1 0 0 -1 851.5 526.479)"
                        />
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(901.862 492)"
                        >
                            Полная наименования линия
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(611.643 275)"
                        >
                            Активная выработка
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(611.643 288)"
                        >
                            Реактивная выработка
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(611.643 301)"
                        >
                            КИУМ
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(611.643 313)"
                        >
                            Открытия направляющего аппарата
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(611.643 326)"
                        >
                            Расхож воды через турбины
                        </text>
                        <text
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="700"
                            font-size="11"
                            transform="translate(551.666 256)"
                        >
                            Основные показатели генератора
                        </text>
                        <path
                            d="M513.787 264.201 606.895 264.201 606.895 277.001 513.787 277.001Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M513.787 277.001 606.895 277.001 606.895 289.801 513.787 289.801Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M513.787 289.801 606.895 289.801 606.895 302.601 513.787 302.601Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M513.787 302.601 606.895 302.601 606.895 315.401 513.787 315.401Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M513.787 315.401 606.895 315.401 606.895 328.201 513.787 328.201Z"
                            fill="#D9D9D9"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M513.12 277.001 607.562 277.001"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M513.12 289.801 607.562 289.801"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M513.12 302.601 607.562 302.601"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M513.12 315.401 607.562 315.401"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M513.787 263.535 513.787 328.868"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M606.895 263.535 606.895 328.868"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M513.12 264.201 607.562 264.201"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <path
                            d="M513.12 328.201 607.562 328.201"
                            stroke="#000000"
                            stroke-width="1.33333"
                            stroke-linejoin="round"
                            stroke-miterlimit="10"
                            fill="none"
                            fill-rule="evenodd"
                        />
                        <g>
                            <text
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(517.566 274)"
                            >
                                Р
                            </text>
                        </g>
                        <text
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(576.9 274)"
                        >
                            МВт
                        </text>
                        <g>
                            <text
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(517.566 287)"
                            >
                                Q
                            </text>
                        </g>
                        <text
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(525.233 287)"
                        >
                            вар
                        </text>
                        <g>
                            <text
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(572.233 287)"
                            >
                                МВАр
                            </text>
                        </g>
                        <g>
                            <text
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(517.566 300)"
                            >
                                КИУМ
                            </text>
                        </g>
                        <g>
                            <text
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(592.066 300)"
                            >
                                %
                            </text>
                        </g>
                        <g>
                            <text
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(517.566 313)"
                            >
                                НА
                            </text>
                        </g>
                        <g>
                            <text
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(591.566 313)"
                            >
                                %
                            </text>
                        </g>
                        <g>
                            <text
                                fill="#005EAC"
                                font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(517.566 325)"
                            >
                                Q
                            </text>
                        </g>
                        <text
                            fill="#005EAC"
                            font-family="Times New Roman,Times New Roman_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(527.9 325)"
                        >
                            вода
                        </text>
                        <text
                            fill="#005EAC"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="11"
                            transform="translate(582.733 325)"
                        >
                            м
                        </text>
                        <text
                            fill="#005EAC"
                            font-family="Calibri,Calibri_MSFontService,sans-serif"
                            font-weight="400"
                            font-size="7"
                            transform="translate(589.9 322)"
                        >
                            3
                        </text>
                        <g>
                            <text
                                fill="#005EAC"
                                font-family="Calibri,Calibri_MSFontService,sans-serif"
                                font-weight="400"
                                font-size="11"
                                transform="translate(593.566 325)"
                            >
                                /с
                            </text>
                        </g>
                    </g>
                </svg>

            </div>
        </section>
    </div>
</div>
