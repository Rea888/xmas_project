<x-layout>


    <x-slot name="scripts">
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
        <link href="{{ asset('css/keep_going.css') }}" rel="stylesheet">

    </x-slot>

    <div class="container">
        <div class="col-lg-6 col-sm-6">
            <div class="row">
            <span class="text-responsive">
                Letter is in process.
                <br/>
                Please wait patiently!
            </span>

            <div class="mySVG">
                <svg id="wrap" height="300" viewBox="0 0 300 300">

                    <!-- background -->
                    <svg id="circle">
                        <circle cx="150" cy="150" r="130" style="stroke: lightblue; stroke-width:18; fill:transparent"/>
                        <circle cx="150" cy="150" r="115" style="fill: #c0392b "/>
                        <path
                            style="stroke: #035b16; stroke-dasharray:820; stroke-dashoffset:820; stroke-width:18; fill:transparent"
                            d="M150,150 m0,-130 a 130,130 0 0,1 0,260 a 130,130 0 0,1 0,-260">
                            <animate attributeName="stroke-dashoffset" dur="6s" to="-820" repeatCount="indefinite"/>
                        </path>
                    </svg>

                    <!-- image -->
                    <svg id="hourglass">
                        <path id="hourglass" d="M150,150 C60,85 240,85 150,150 C60,215 240,215 150,150 Z"
                              style="stroke: lightblue; stroke-width:5; fill:lightblue;"/>

                        <path id="frame"
                              d="M100,97 L200, 97 M100,203 L200,203 M110,97 L110,142 M110,158 L110,200 M190,97 L190,142 M190,158 L190,200 M110,150 L110,150 M190,150 L190,150"
                              style="stroke: #035b16; stroke-width:6; stroke-linecap:round"/>

                        <animateTransform xlink:href="#frame" attributeName="transform" type="rotate" begin="0s"
                                          dur="3s" values="0 150 150; 0 150 150; 180 150 150" keyTimes="0; 0.8; 1"
                                          repeatCount="indefinite"/>
                        <animateTransform xlink:href="#hourglass" attributeName="transform" type="rotate" begin="0s"
                                          dur="3s" values="0 150 150; 0 150 150; 180 150 150" keyTimes="0; 0.8; 1"
                                          repeatCount="indefinite"/>
                    </svg>

                    <!-- sand -->
                    <svg id="upper">
                        <!-- upper part -->
                        <polygon id="upper" points="120,125 180,125 150,147" style="fill:#c0392b;">
                            <animate attributeName="points" dur="3s" keyTimes="0; 0.8; 1"
                                     values="120,125 180,125 150,147; 150,150 150,150 150,150; 150,150 150,150 150,150"
                                     repeatCount="indefinite"/>
                        </polygon>

                        <!-- falling sand -->
                        <path id="line" stroke-linecap="round" stroke-dasharray="1,4" stroke-dashoffset="200.00"
                              stroke="#035b16" stroke-width="2" d="M150,150 L150,198">
                            <!-- running sand -->
                            <animate attributeName="stroke-dashoffset" dur="3s" to="1.00" repeatCount="indefinite"/>
                            <!-- emptied upper -->
                            <animate attributeName="d" dur="3s" to="M150,195 L150,195"
                                     values="M150,150 L150,198; M150,150 L150,198; M150,198 L150,198; M150,195 L150,195"
                                     keyTimes="0; 0.65; 0.9; 1" repeatCount="indefinite"/>
                            <!-- last drop -->
                            <animate attributeName="stroke" dur="3s" keyTimes="0; 0.65; 0.8; 1"
                                     values="#2c3e50;#2c3e50;transparent;transparent" to="transparent"
                                     repeatCount="indefinite"/>
                        </path>

                        <!-- lower part -->
                        <g id="lower">
                            <path d="M150,180 L180,190 A28,10 0 1,1 120,190 L150,180 Z"
                                  style="stroke: transparent; stroke-width:5; fill:#c0392b;">
                                <animateTransform attributeName="transform" type="translate" keyTimes="0; 0.65; 1"
                                                  values="0 15; 0 0; 0 0" dur="3s" repeatCount="indefinite"/>
                            </path>
                            <animateTransform xlink:href="#lower" attributeName="transform"
                                              type="rotate"
                                              begin="0s" dur="3s"
                                              values="0 150 150; 0 150 150; 180 150 150"
                                              keyTimes="0; 0.8; 1"
                                              repeatCount="indefinite"/>
                        </g>

                        <!-- lower overlay - hourglass -->
                        <path d="M150,150 C60,85 240,85 150,150 C60,215 240,215 150,150 Z"
                              style="stroke: lightblue; stroke-width:5; fill:transparent;">
                            <animateTransform attributeName="transform"
                                              type="rotate"
                                              begin="0s" dur="3s"
                                              values="0 150 150; 0 150 150; 180 150 150"
                                              keyTimes="0; 0.8; 1"
                                              repeatCount="indefinite"/>
                        </path>

                        <!-- lower overlay - frame -->
                        <path id="frame" d="M100,97 L200, 97 M100,203 L200,203"
                              style="stroke:#035b16; stroke-width:6; stroke-linecap:round">
                            <animateTransform attributeName="transform"
                                              type="rotate"
                                              begin="0s" dur="3s"
                                              values="0 150 150; 0 150 150; 180 150 150"
                                              keyTimes="0; 0.8; 1"
                                              repeatCount="indefinite"/>
                        </path>
                    </svg>

                </svg>
            </div>
            </div>
        </div>
    </div>


</x-layout>


