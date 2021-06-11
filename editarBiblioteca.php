<?php 
    include "conexao.php";
?>

<div class="containter-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="titulo-form">Adicionar Livros</h2>
                <form id="formEditarBiblioteca" method="POST" action="addLivro.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="formTitulo">Título do Livro</label>
                        <input type="text" name="titulo" id="formTitulo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="descIngles">Descrição em Inglês</label>
                        <textarea name="descIngles" id="descIngles" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="descPort">Descrição em Português</label>
                        <textarea name="descPort" id="descPort" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="formLink">Link para o Gutenberg</label>
                        <input type="text" name="link" id="formLink" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="formCapa">Imagem da Capa</label>
                        <input type="file" name="imgCapa" id="formCapa" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-warning form-control" style="margin-top: 2vh">Adicionar Livro</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2 class="titulo-form">Livros Registrados</h2>
                <?php 
                    // Mesmo código da página "biblioteca", porém com botões de edição e exclusão dos livros.
                    $comando = $conexao -> prepare("SELECT * FROM livro");
                    $comando -> execute();
                    $resultado = $comando -> fetchAll(PDO::FETCH_ASSOC);
                    
                    $contador = 0;              
                    
                    foreach ($resultado as $livro) {
                        if ($contador % 2 == 0) {
                            echo "<div class='row'>";
                            echo "<div class='col-lg-6'><div class='row'><div class='col-3'><a href='" . $livro["link"] ."'><img src='" . $livro["capa"] 
                            . "' class='capa'></a>" 
                            // Adicionando botões para edição e exclusão de livros.
                            . "<a href='editar.php?id_up=" . $livro["id"] . "'><button class='btn btn-primary btn-form'>Editar</button></a>" 
                            ."<a href='editar.php?id_ex=" . $livro["id"] . "'><button class='btn btn-danger btn-form'>Excluir</button></a>" 
                            
                            . "</div><div class='col-8 offset-1'><section class='desc'><h5>" . $livro["titulo"] . "</h5><p>" . $livro["desc_ingles"]
                            . "</p><p>" . $livro["desc_port"] . "</p></section></div></div></div>";
                        }else{
                            echo "<div class='col-lg-6'><div class='row'><div class='col-3'><a href='" . $livro["link"] ."'><img src='" . $livro["capa"] 
                            . "' class='capa'></a>" 
                            // Adicionando botões para edição e exclusão de livros.
                            . "<a href='editar.php?id_up=" . $livro["id"] . "'><button class='btn btn-primary btn-form'>Editar</button></a>" 
                            ."<a href='editar.php?id_ex=" . $livro["id"] . "'><button class='btn btn-danger btn-form'>Excluir</button></a>" 
                            
                            . "</div><div class='col-8 offset-1'><section class='desc'><h5>" . $livro["titulo"] . "</h5><p>" . $livro["desc_ingles"]
                            . "</p><p>" . $livro["desc_port"] . "</p></section></div></div></div>";
                            echo "</div>";
                        }                                                   
                                                
                        $contador++;
                    }
                    if ($comando->rowCount() % 2 != 0) { // Fechar a div da linha se o número de livros for ímpar.
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>