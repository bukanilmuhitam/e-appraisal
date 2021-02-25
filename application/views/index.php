<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <div id="app">
            {{username}}
           <div>
                <input type="text" v-model="username">&nbsp;
                <button @click="submit">Submit</button>
           </div>
        </div>


    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        const App = {
            data() {
                return {
                    message : 'hello',
                    username : '',
                }
            },
            methods : {
                submit(event) {
                    axios.post('http://localhost/basic_template_vue/test/handle_post', {
                        username: this.username,
                    }).then(function (response) {
                        console.log(response.data);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
            }
        }

        Vue.createApp(App).mount('#app')
    </script>
</body>
</html>