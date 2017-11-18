<?php

namespace App\Http\Controllers;
use File;
use DB;
use Input;
use Carbon\Carbon;
use App\Typeprod;
use App\Produto;
use App\Colaborador;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;
use App\Funcionario;
use App\User;
use Vsmoraes\Pdf\Pdf;
use Artisan;
use App\Mover;
use Session;
use Redirect;

class ControllerProdutos extends Controller
{
  private $pdf;


    public function __construct()
    {
        $this->middleware('auth');

    }
  /*  public function __construct(Pdf $pdf)
    {
        $this->pdf = $pdf;
    }*/
    public function page()
    {
      return view('index');
    }

    public function pesquisa()
    {
      $users = User::searchable()->paginate(5);
      return view('pesquisa')->withUsers($users);
    }

    public function listaproduto()
    {
      $produtos = Produto::all();
      return view('produtos.listaProduto',['produtos'=>$produtos]);
    }
    public function criatype()
    {
    $exitCode = Artisan::call('cache:clear');
      return view('tipo.criaType');
    }

    public function salvatype()
    {
      $type = new Typeprod;
      $type->type_nome = strtoupper(Input::get('type_nome'));
      $type->type_qntd = strtoupper(Input::get('type_qntd'));
      $type->save();

      return redirect('/listatype');
    }
    public function listatype()
    {
      $type =  Typeprod::all();
      return view('tipo.listaType',['type' => $type]);
    }
    public function chamado()
    {
      $produtos =  Typeprod::all();
      return view('chamados.chamado_google',['produtos'=>$produtos]);
    }
    public function teste(Pdf $pdf)
    {
        $this->pdf = $pdf;
        $html = view('chamados.teste')->render();

        return $this->pdf
            ->load($html)
            ->show();
    }

    public function criaproduto()
    {
      $funcionarios =  Funcionario::all()->pluck('fun_nome','id');
      $produtos =  Typeprod::all()->pluck('type_nome','id');
      return view('produtos.criaProduto', ['produtos'=>$produtos, 'funcionarios'=>$funcionarios]);
    }
    public function salvaproduto(ProdutoRequest $post)
    {
     $post = new Produto;
     $post->type_id = strtoupper(Input::get('type_id'));
     $post->fun_id = strtoupper(Input::get('fun_id'));
     $post->prod_nome = strtoupper(Input::get('prod_nome'));
     $post->prod_patrimonio = strtoupper(Input::get('prod_patrimonio'));
     $post->prod_serie = strtoupper(Input::get('prod_serie'));
     $post->prod_marca = strtoupper(Input::get('prod_marca'));
     $post->prod_modelo = strtoupper(Input::get('prod_modelo'));
     $post->prod_status = strtoupper(Input::get('prod_status'));
     $post->prod_garantia = strtoupper(Input::get('prod_garantia'));
     $post->save();

     $post = new Mover;
     $post->funcionario = strtoupper(Input::get('fun_id'));
     $post->produto = strtoupper(Input::get('prod_nome'));
     $post->patrimonio =  strtoupper(Input::get('prod_patrimonio'));
     $post->save();
     Session::flash('salva', 'Produto Salvo com sucesso');
     return Redirect::to('listaproduto');
   }
   public function editaproduto($id)
   {

    $types = Typeprod::all()->pluck('type_nome','id')->toArray();
    $funcionarios =  Funcionario::all()->pluck('fun_nome','id')->toArray();
    $produtos = Produto::findOrFail($id);

    return view('produtos.editaProduto', compact(['funcionarios','types', 'produtos']));
   }
   public function updateproduto(ProdutoRequest $request,$id)
   {
     Session::flash('key', 'value');
     $post = new Mover;
     $post->funcionario = strtoupper(Input::get('fun_id'));
     $post->produto = strtoupper(Input::get('prod_nome'));
     $post->patrimonio =  strtoupper(Input::get('prod_patrimonio'));
     $post->save();

     $prod = Produto::find($id)->update($request->all());
     Session::flash('altera', 'Produto Alterado com sucesso');
     return Redirect::to('listaproduto');
   }
   public function addtype($id)
   {
     $produtos = Typeprod::find($id);
     return view('tipo.addType', ['produtos'=>$produtos]);
   }
     public function salvaaddtype()
    {
       $post = new Typeprod;
       $prod_nome = $post->id = Input::get('id');
       $qntd = $post->qntd = Input::get('type_qntd');


        $status = \DB::table('typeprods')
               ->where('id',$prod_nome)
               ->increment('type_qntd', $qntd);
        if ($status) // atualizado com sucesso, substitui $id e id pelo $prod_nome e prod_nome do arquivo original
        {
          echo "atual";
        }
        return redirect('/listatype');
     }
      public function jsModal(){

          return view('modal.modal');
      }


}
