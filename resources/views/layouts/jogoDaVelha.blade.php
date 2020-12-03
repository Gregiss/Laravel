@section('jogoDaVelha')
    <h1>Jogo da velha</h1>

    <div id="velha">
        <div class="tabuleiro">
            <div 
            class="d"
            v-for="bloco in tabuleiro"
            >
                <div 
                :id="`bloco_y${tabuleiro.indexOf(bloco)}_x${tabuleiro[tabuleiro.indexOf(bloco)].indexOf(i)}`"
                class="bloco"
                :class="bloco"
                @click="play(tabuleiro.indexOf(bloco), tabuleiro[tabuleiro.indexOf(bloco)].indexOf(i))"
                v-for="i in bloco">
                </div>
            </div>
        </div>
    </div>

    <style>
        .tabuleiro{
            width: 300px;
            height: 300px;
            border: 2px solid #000;
        }

        .bloco{
            width: calc(100px - 1.35px);
            height: 99px;
            background: #eee;
            float: left;
            border: 1px solid rgba(0,0,0,.40);
            cursor: pointer;
        }

        .bloco:hover{
            background: #ddd;
        }

        .bloco h1{
            position: relative;
            top: 25px;
            left: 35px;
        }

        .jogado{
            background: #0062cc !important;
            color: #fff !important;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script>
        const app = new Vue({
            el: "#velha", 
            data: {
                tabuleiro: [[1,2,3],[1,2,3],[1,2,3]],
                vez: 'X'
            },
            methods: {
                play(y, x){
                    this.vez == 'X' ? this.vez = 'O' : this.vez = 'X'
                    this.tabuleiro[y][x] == 1 ||
                    this.tabuleiro[y][x] == 2 ||
                    this.tabuleiro[y][x] == 3 ? this.tabuleiro[y][x] = this.vez : ''
                    const bloco = document.querySelector(`#bloco_y${y}_x${x}`)
                    bloco.innerHTML = `<h1>${this.tabuleiro[y][x]}</h1>`
                    bloco.classList.add("jogado")
                    console.clear()
                }
            }
        })
    </script>

@endsection