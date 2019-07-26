<?php

use Illuminate\Database\Seeder;
use App\Pagina;
class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existe = Pagina::where('tipo', '=', 'sobre')->count();
       
        if($existe){
            
            $paginaSobre = Pagina::where('tipo', '=', 'sobre')->first();
                       
        }else{
            
            $paginaSobre = new Pagina();
            
        }
        
        $paginaSobre->titulo = "A Empresa";
        $paginaSobre->descricao = "Descrição breve sobre a empresa.";
        $paginaSobre->texto = "Texto sobre a empresa.";
        $paginaSobre->imagem = "img/modelo_quadrado.jpg";
        $paginaSobre->mapa = null;
        $paginaSobre->tipo = "sobre";
        $paginaSobre->save();
        
        echo "Página Sobre criada com sucesso";
        
        
        $existe = Pagina::where('tipo', '=', 'contato')->count();
       
        if($existe){
            
            $paginaContato = Pagina::where('tipo', '=', 'contato')->first();
                       
        }else{
            
            $paginaContato = new Pagina();
            
        }
        
        $paginaContato->titulo = "Entre em contato";
        $paginaContato->descricao = "Preenha o formulário.";
        $paginaContato->texto = "Contato";
        $paginaContato->imagem = "img/modelo_quadrado.jpg";
        $paginaContato->email = "jailsonjpo@gmail.com";
        $paginaContato->tipo = "contato";
        $paginaContato->save();
        
        echo "Página Contato criada com sucesso";
        
    }
}
