<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="flex.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f2652a0a74.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <div id="brand">Regine's Flexbox Sandbox</div>
        <div class="footer-links">
            <a href="mailto:programming.regina@gmail.com?Subject=FlexboxSandBox" title="Enviar eMail"><i class="fas fa-envelope-square"></i></a>
            <a href="https://github.com/programming-Regina" target="_blank" title="Visita mis repositorios en GitHub"><i class="fab fa-github-square"></i></a>
            <a href="https://www.linkedin.com/in/regina-molares/" target="_blank" title="Visita mi cuenta de LikedIn"><i class="fab fa-linkedin"></i></a>
            <a href="https://twitter.com/ReginaMolares" target="_blank" title="Visita mi cuenta de Twitter"><i class="fab fa-twitter-square"></i></a>
        </div>
    </nav>
    <main>
        <div class="big-container" id="app">

            <div class="col1">
                <h3>My flex container</h3>
                <div class="flex-container" v-bind:style="{display: display_s, flexDirection: flex_direction_s, flexWrap: flex_wrap_s, justifyContent: justify_content_s, alignItems: align_items_s, alignContent: align_content_s}">

                    <div class="flex-item" id="flex-item1">
                        <h4>My flex item 1</h4>
                    </div>
                    <div class="flex-item" id="flex-item2">
                        <h4>My flex item 2</h4>
                    </div>
                    <div class="flex-item" id="flex-item3" v-bind:style="{flexGrow: flex_grow_s, flexShrink: flex_shrink_s, flexBasis: flex_basis_s, alignSelf: align_self_s}">
                        <h4>My flex item 3</h4>
                        <i class="far fa-smile-wink"></i>
                    </div>
                    <div class="flex-item" id="flex-item4">
                        <h4>My flex item 4</h4>
                    </div>
                </div>
            </div>
            <div class="col2">
                <h3 id="play">Play!</h3>
                <div id="container-attrs">
                    <h4>Flex container attributes</h4>
                </div>

                <div> 
                    <label for="display">display: </label>
                    <select name="display" id="display" v-model="display_s">
                        <template v-for="item in display">
                            <option>{{item}}</option>
                        </template>
                    </select>
                </div>

                <div>
                    <label for="flex_direction">flex-direction: </label>
                    <select name="flex_direction" id="flex_direction" v-model="flex_direction_s">
                        <template v-for="item in flex_direction">
                            <option>{{item}}</option>
                        </template>
                    </select>
                </div>

                <div>
                    <label for="flex_wrap">flex-wrap: </label>
                    <select name="flex_wrap" id="flex_wrap" v-model="flex_wrap_s">
                        <template v-for="item in flex_wrap">
                            <option>{{item}}</option>
                        </template>
                    </select>
                </div>

                <div>
                    <label for="justify_content">justify-content: </label>
                    <select name="justify_content" id="justify_content" v-model="justify_content_s">
                        <template v-for="item in justify_content">
                            <option>{{item}}</option>
                        </template>
                    </select>
                </div>

                <div>
                    <label for="align_items">align-items: </label>
                    <select name="align_items" id="align_items" v-model="align_items_s">
                        <template v-for="item in align_items">
                            <option>{{item}}</option>
                        </template>
                    </select>
                </div>

                <div>
                    <label for="align_content">align-content: </label>
                    <select name="align_content" id="align_content" v-model="align_content_s">
                        <template v-for="item in align_content">
                            <option>{{item}}</option>
                        </template>
                    </select>
                </div>

                <div id="items-attrs">
                    <h4>Flex items attributes</h4>
                    <div>
                        <label for="flex_grow">flex-grow: </label>
                        <select name="flex_grow" id="flex_grow" v-model="flex_grow_s">
                            <template v-for="item in flex_grow">
                                <option>{{item}}</option>
                            </template>
                        </select>
                    </div>
                    <div>
                        <label for="flex_shrink">flex-shrink: </label>
                        <select name="flex_shrink" id="flex_shrink" v-model="flex_shrink_s">
                            <template v-for="item in flex_shrink">
                                <option>{{item}}</option>
                            </template>
                        </select>
                    </div>
                    <div>
                        <label for="flex_basis">flex-basis: </label>
                        <select name="flex_basis" id="flex_basis" v-model="flex_basis_s">
                            <template v-for="item in flex_basis">
                                <option>{{item}}</option>
                            </template>
                        </select>
                    </div>
                    <div>
                        <label for="align_self">align-self: </label>
                        <select name="align_self" id="align_self" v-model="align_self_s">
                            <template v-for="item in align_self">
                                <option>{{item}}</option>
                            </template>
                        </select>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <footer>
        <div class="copy">&copy;2021 - Regina N. Molares</div>

    </footer>
    <script type="text/javascript" src="vue.min.js"></script>
    <script type="text/javascript" src="data.js"></script>
</body>

</html>