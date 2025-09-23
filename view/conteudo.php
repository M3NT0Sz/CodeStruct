<?php
session_start();
error_reporting(0);

// Conteúdo dinâmico das páginas
$paginas = [
  'tipoAbstratoDados' => [
    'titulo' => 'Tipo Abstrato de Dados',
    'video' => 'https://www.youtube.com/embed/06PJrmeG784?si=foy7GeAu2oTJ1cae',
    'conteudo' => [
      ['h2' => 'Introdução', 'p' => 'Os Tipos Abstrato de Dados (TAD) são conceitos fundamentais na ciência da computação que definem estruturas de dados de maneira abstrata, independentemente de implementações específicas. Um TAD especifica um conjunto de valores possíveis e um conjunto de operações que podem ser realizadas sobre esses valores, permitindo que os desenvolvedores se concentrem em como usar a estrutura de dados em vez de como ela é implementada.'],
      ['h2' => 'Importância', 'p' => 'Os TADs são cruciais para o desenvolvimento de software robusto e eficiente, pois promovem a reutilização de código e a modularidade. Eles permitem que programadores definam e utilizem estruturas de dados sem se preocupar com os detalhes de implementação, facilitando a manutenção e a evolução do software. Exemplos comuns de TADs incluem listas, filas, pilhas, árvores e grafos.'],
      ['h2' => 'Funcionamento', 'p' => 'Um TAD define uma interface clara para operações sobre uma estrutura de dados. Por exemplo, um TAD para uma lista pode incluir operações como adicionar um elemento, remover um elemento e acessar um elemento em uma posição específica. A implementação concreta desses métodos pode variar, mas a interface permanece consistente.'],
      ['h2' => 'Exemplo de Código em C#', 'pre' => "public class No {\n  public string Valor;\n  public No Proximo;\n  public No(string valor) { Valor = valor; Proximo = null; }\n}\npublic class Fila {\n  private No head; private No tail;\n  public Fila() { head = null; tail = null; }\n  public void Enfileirar(string valor) { No novoNo = new No(valor); if (tail != null) tail.Proximo = novoNo; tail = novoNo; if (head == null) head = novoNo; }\n  public string Desenfileirar() { if (head == null) throw new InvalidOperationException(\"A fila está vazia.\"); string valor = head.Valor; head = head.Proximo; if (head == null) tail = null; return valor; }\n}\n// Exemplo de uso\npublic class Program {\n  public static void Main() { Fila fila = new Fila(); fila.Enfileirar(\"primeiro\"); fila.Enfileirar(\"segundo\"); Console.WriteLine(fila.Desenfileirar()); Console.WriteLine(fila.Desenfileirar()); }\n}"],
      ['h2' => 'Conclusão', 'p' => 'Os tipos abstratos de dados são ferramentas poderosas na ciência da computação, permitindo a criação de software mais organizado, modular e fácil de manter. Ao focar na interface e nas operações permitidas por uma estrutura de dados, os desenvolvedores podem criar soluções flexíveis e eficientes, abstraindo os detalhes da implementação e facilitando o desenvolvimento de aplicações complexas.']
    ]
  ],
  'listasSimplesmenteEncadeadas' => [
    'titulo' => 'Listas Simplesmente Encadeadas',
    'video' => 'https://www.youtube.com/embed/bqwIoNiHAuQ?si=AHYhT-lLrGOjG0K-',
    'conteudo' => [
      ['h2' => 'Introdução', 'p' => 'As listas simplesmente encadeadas são uma das estruturas de dados mais básicas e fundamentais na ciência da computação. Em uma lista simplesmente encadeada, cada nó contém um valor e um ponteiro para o próximo nó da sequência. Essa estrutura permite a inserção e remoção de elementos de forma eficiente.'],
      ['h2' => 'Importância', 'p' => 'Listas simplesmente encadeadas são amplamente utilizadas em diversas aplicações devido à sua simplicidade e eficiência. Elas são especialmente úteis em situações onde as operações de inserção e remoção são frequentes, como em implementações de filas e pilhas, bem como em algoritmos que requerem uma estrutura de dados dinâmica. Em comparação com arrays, as listas simplesmente encadeadas têm a vantagem de não precisar de um tamanho fixo no momento da criação. Isso as torna uma escolha ideal para aplicações onde o número de elementos é desconhecido ou varia frequentemente.'],
      ['h2' => 'Funcionamento', 'p' => 'Uma lista simplesmente encadeada é composta por nós, onde cada nó contém dois componentes principais:'],
      ['ul' => ['O valor armazenado.', 'Um ponteiro para o próximo nó.']],
      ['img' => 'https://upload.wikimedia.org/wikipedia/commons/6/6d/Singly-linked-list.svg', 'alt' => 'Estrutura de uma lista simplesmente encadeada'],
      ['h2' => 'Exemplo de Código em C#', 'pre' => "public class Node\n{\n    public int Value; // Valor armazenado no nó\n    public Node Next; // Ponteiro para o próximo nó\n    \n    public Node(int value)\n    {\n        Value = value;\n        Next = null;\n    }\n}\n\npublic class SinglyLinkedList\n{\n    private Node head; // Ponteiro para o primeiro nó da lista\n\n    public SinglyLinkedList()\n    {\n        head = null;\n    }\n\n    public void AddToEnd(int value)\n    {\n        Node newNode = new Node(value);\n        if (head == null)\n        {\n            head = newNode;\n        }\n        else\n        {\n            Node current = head;\n            while (current.Next != null)\n            {\n                current = current.Next;\n            }\n            current.Next = newNode;\n        }\n    }\n\n    public void PrintList()\n    {\n        Node current = head;\n        while (current != null)\n        {\n            Console.Write(current.Value + \" \" );\n            current = current.Next;\n        }\n        Console.WriteLine();\n    }\n}\n\n// Exemplo de uso\nSinglyLinkedList list = new SinglyLinkedList();\nlist.AddToEnd(1);\nlist.AddToEnd(2);\nlist.AddToEnd(3);\nlist.PrintList();"],
      ['h2' => 'Conclusão', 'p' => 'Listas simplesmente encadeadas são uma estrutura de dados versátil e eficiente, adequada para uma variedade de aplicações em ciência da computação. Sua simplicidade de implementação e eficiência nas operações de inserção e remoção as tornam uma escolha popular entre os desenvolvedores e engenheiros de software. Embora as listas simplesmente encadeadas tenham algumas limitações, como a navegação unidirecional, elas ainda são extremamente úteis em muitos contextos.']
    ]
  ],
  // ... Repita para todas as outras páginas migradas ...
];

$pagina = $_GET['pagina'] ?? 'tipoAbstratoDados';
$dados = $paginas[$pagina] ?? $paginas['tipoAbstratoDados'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./CSS/style.css" />
  <link rel="shortcut icon" href="./Imagens/Logo.png" type="image/x-icon" />
  <title>CodeStruct - <?php echo htmlspecialchars($dados['titulo']); ?></title>
</head>
<body>
  <header class="navbar">
    <a href="../index.php">
      <img src="./Imagens/Logo.png" />
      <h1>CodeStruct</h1>
    </a>
    <ul>
      <h3>
        <li onclick="toggleDropdown()" style="cursor: pointer;">
          <a href="#">Conteúdos</a>
          <ul id="myDropdown" class="dropdown-content">
            <li><a href="conteudo.php?pagina=tipoAbstratoDados">TAD</a></li>
            <li><a href="conteudo.php?pagina=listasSimplesmenteEncadeadas">Listas Simplesmente Encadeadas</a></li>
            <li><a href="conteudo.php?pagina=listasDuplamenteEncadeadas">Listas Duplamente Encadeadas</a></li>
            <li><a href="conteudo.php?pagina=FilaFIFO">Fila FIFO</a></li>
            <li><a href="conteudo.php?pagina=FilaDePrioridade">Fila de Prioridade</a></li>
            <li><a href="conteudo.php?pagina=Pilha">Pilha</a></li>
            <li><a href="conteudo.php?pagina=ArvoreBinaria">Árvore Binária</a></li>
            <li><a href="conteudo.php?pagina=ArvoreB">Árvore B</a></li>
            <li><a href="conteudo.php?pagina=ArvoreTrie">Árvore Trie</a></li>
            <li><a href="conteudo.php?pagina=ArvoreAVL">Árvore AVL</a></li>
            <li><a href="conteudo.php?pagina=ArvoreRubroNegra">Árvore Rubro-Negra</a></li>
          </ul>
        </li>
      </h3>
      <h3>
        <li>
          <?php if ($_SESSION['logado'] != null) { ?>
            <a href="./jornada.php">Jornada</a>
          <?php } else { ?>
            <a href="./login.php">Jornada</a>
          <?php } ?>
        </li>
      </h3>
      <h3>
        <?php if (isset($_SESSION['logado']) != "") { ?>
          <li><a href="./model/processamento.php">Sair</a></li>
        <?php } else { ?>
          <li><a href="./login.php">Entrar</a></li>
        <?php } ?>
      </h3>
    </ul>
    <input type="checkbox" class="checkbox" id="chk" />
    <label class="label" for="chk">
      <i class="fas fa-moon"></i>
      <i class="fas fa-sun"></i>
      <div class="bola"></div>
    </label>
    <script src="./JS/script.js"></script>
    <script src="https://kit.fontawesome.com/5bcdea54fd.js" crossorigin="anonymous"></script>
  </header>
  <section class="tela">
    <section class="tela80">
      <header class="pagNome">
        <h1><?php echo htmlspecialchars($dados['titulo']); ?></h1>
      </header>
      <?php if (!empty($dados['video'])): ?>
      <section class="video">
        <h2>Vídeo Explicativo</h2>
        <section class="video-container">
          <iframe src="<?php echo htmlspecialchars($dados['video']); ?>" frameborder="0" allowfullscreen></iframe>
        </section>
      </section>
      <?php endif; ?>
      <?php foreach ($dados['conteudo'] as $bloco): ?>
        <section class="textos">
          <?php if (!empty($bloco['h2'])): ?><h2><?php echo $bloco['h2']; ?></h2><?php endif; ?>
          <?php if (!empty($bloco['p'])): ?><p><?php echo $bloco['p']; ?></p><?php endif; ?>
          <?php if (!empty($bloco['ul']) && is_array($bloco['ul'])): ?>
            <ul>
              <?php foreach ($bloco['ul'] as $item): ?>
                <li><?php echo $item; ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <?php if (!empty($bloco['img'])): ?>
            <img src="<?php echo $bloco['img']; ?>" alt="<?php echo $bloco['alt'] ?? ''; ?>" />
          <?php endif; ?>
          <?php if (!empty($bloco['pre'])): ?>
            <section class="code-container">
              <pre><code class="language-csharp"><?php echo $bloco['pre']; ?></code></pre>
            </section>
          <?php endif; ?>
        </section>
      <?php endforeach; ?>
    </section>
  </section>
  <footer class="rodape">
    <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas - AMS</p>
    <p>Copyright &copy; 2024 - Todos os direitos reservados</p>
  </footer>
</body>
</html>
