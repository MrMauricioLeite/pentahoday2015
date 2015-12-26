<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" lang="en-us">

<head>
  <title>PDB2015 - Pentaho Day Brasil 2015</title><meta name="resource-type" content="document"/>
  <meta http-equiv="pragma" content="no-cache"/>
  <meta name="revisit-after" content="1"/>
  <meta name="classification" content="Internet"/>
  <meta name="description" content="Pentaho Day Brasil 2015"/>
  <meta name="keywords" content="PDB2015 Pentaho Day Brasil 2015"/>
  <meta name="robots" content="ALL"/>
  <meta name="distribution" content="Global"/>
  <meta name="rating" content="General"/>
  <meta name="author" content="Pentaho Day Brasil 2015"/>
  <meta name="language" content="pt-br"/>
  <meta name="doc-class" content="Completed"/>
  <meta name="doc-rights" content="Public"/>
  <meta name="Content-Type" content="text/html; charset=iso88591"/>
  <base href='http://www.ambientelivre.com.br/saas/evento/pentahoday2015/pub/'/>
  <link rel="stylesheet" type="text/css" href="screen.css" media="screen" title="Tela"/>
  <link rel="stylesheet" type="text/css" href="print.css" media="print"/>
  <link rel="stylesheet" type="text/css" href="local.css" media="print"/>
  <link rel="stylesheet" type="text/css" href="local.css" media="screen"/>
</head>
<body>


<h1>Pentaho Day Brasil 2015 - Programação</h1>

<p>
Salas, dias e horários estão sujeitos a alterações, de acordo com os critérios
da organização do <em>Pentaho Day Brasil 2015</em>.
</p>

<p>
<strong>Veja também:</strong> uma versão sem decorações,
<a href="programacao?print=1">para impressão</a>.
</p>

<div id="legend">
<hr/>
<h2>Trilhas</h2>

<p>Desmarque/marque as trilhas para escondê-las/exibí-las</p>

<table border="0" width='100%' id='table_legend'>
<tr>
<form>
<td width='25%' style='background: #cccccc;'>
<input type='checkbox' name='track1' checked onclick='javascript: toggle(this, 1, "td")'>
Conceitual de BI & BA
</td>
<td width='25%' style='background: #CCCCFF;'>
<input type='checkbox' name='track2' checked onclick='javascript: toggle(this, 2, "td")'>
Ferramentas de BI & BA
</td>
<td width='25%' style='background: #ccffff;'>
<input type='checkbox' name='track3' checked onclick='javascript: toggle(this, 3, "td")'>
Cases
</td>
<td width='25%' style='background: #ff99ff;'>
<input type='checkbox' name='track4' checked onclick='javascript: toggle(this, 4, "td")'>
Data Mining
</td>
</tr><tr>
<td width='25%' style='background: #ffcc66;'>
<input type='checkbox' name='track5' checked onclick='javascript: toggle(this, 5, "td")'>
Big Data
</td>
<td width='25%' style='background: #ffff99;'>
<input type='checkbox' name='track6' checked onclick='javascript: toggle(this, 6, "td")'>
Open Data
</td>
<td width='25%' style='background: #33CC99;'>
<input type='checkbox' name='track7' checked onclick='javascript: toggle(this, 7, "td")'>
Cloud BI
</td>
<td width='25%' style='background: #6699CC;'>
<input type='checkbox' name='track8' checked onclick='javascript: toggle(this, 8, "td")'>
Data Integration
</td>
</tr><tr>
<td width='25%' style='background: #66CC33;'>
<input type='checkbox' name='track9' checked onclick='javascript: toggle(this, 9, "td")'>
Banco de Dados
</td>
<td width='25%' style='background: #66ff33;'>
<input type='checkbox' name='track10' checked onclick='javascript: toggle(this, 10, "td")'>
Mobile BI
</td>
<td width='25%' style='background: #FFCCFF;'>
<input type='checkbox' name='track11' checked onclick='javascript: toggle(this, 11, "td")'>
Assuntos Emergentes
</td>
<td width='25%' style='background: #999966;'>
<input type='checkbox' name='track12' checked onclick='javascript: toggle(this, 12, "td")'>
Minicurso
</td>
</tr><tr>
<td width='25%' style='background: #99ffcc;'>
<input type='checkbox' name='track13' checked onclick='javascript: toggle(this, 13, "td")'>
Organização
</td>
<td width='25%' style='background: #CC9966;'>
<input type='checkbox' name='track14' checked onclick='javascript: toggle(this, 14, "td")'>

</td>
</form>
</tr>
</table>
<hr/>

<script language='javascript'>

var show = {
  'tech' : true,
  'non_tech' : true
};

function toggleByTag(element, tagname, show) {
  if (tagname == 'div') {
    element.style.display = show?'block':'none';
    return;
  }
  if (tagname == 'td') {
    element.style.visibility = show?'visible':'hidden';
    return;
  }
}

function toggle(checkbox, cod, tagname) {
  var elements = document.getElementsByTagName(tagname);
  for (var i = 0; i < elements.length; i++) {
    var cell = elements.item(i);
    if (cell.className == 'tech_track_' + cod ) {
      toggleByTag(cell, tagname, checkbox.checked && show['tech']);
    }
    if (cell.className == 'non_tech_track_' + cod ) {
      toggleByTag(cell, tagname, checkbox.checked && show['non_tech']);
    }
  }
}

function toggle_tech(checkbox, type, tagname) {
  show[type] = checkbox.checked;
  track_boxes = document.getElementById('table_legend').getElementsByTagName('input');
  for (var i = 0; i < track_boxes.length; i++) {
    box = track_boxes[i];
    if (box.type == 'checkbox') {
      cod = box.name.replace(/^track/, '');
      toggle(box, cod, tagname);
    }
  }
}

</script>


<h2>Exibir palestras técnicas/não-técnicas</h2>

<ul>
  <div>
    <input type='checkbox' name='show_tech' checked onclick='javascript: toggle_tech(this, "tech", "td")'/> Exibir palestras técnicas
  </div>
  <div>
    <input type='checkbox' name='show_tech' checked onclick='javascript: toggle_tech(this, "non_tech", "td")'/> Exibir palestras não-técnicas
  </div>
</ul>

<hr/></div>

<div id="program">
<a name="toc"></a>
<p>
<strong>Índice:</strong>
</p>

<ul>
  <li><a href="/saas/evento/pentahoday2015/pub/#dia1">15 de Maio</a></li>
  <li><a href="/saas/evento/pentahoday2015/pub/#dia2">16 de Maio</a></li>
</ul>

  <a name="dia1"></a>
  <h2>15 de Maio <span style='font-size: 10px;'>(<a href="#toc">voltar ao topo</a>)</span></h2>
    <table class='formulario grade' style='width: 100%;'>
      <tr>
        <th></th>
                  <th>
            Auditório Advanced
          </th>
                  <th>
            Auditório Cases & Business
          </th>
                  <th>
            Auditório Beginners
          </th>
                  <th>
            LAB Advanced
          </th>
                  <th>
            LAB Beginners
          </th>
                  <th>
            LAB Tools
          </th>
              </tr>
              <tr>
          <th>08:00/08:30</th>
                                                          	    	    <!-- day 1, room 1, hour 1 -->
	    <td bgcolor="#99ffcc"  class='non_tech_track_13'>
                            <center>
                <a href="programacao/25">
                  <strong>Organização</strong>
                  <br/>
                  <em>Credenciamento</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Organização</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 2, hour 1 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 3, hour 1 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 4, hour 1 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 5, hour 1 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 6, hour 1 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>08:30/09:00</th>
                                                          	    	    <!-- day 1, room 1, hour 2 -->
	    <td bgcolor="#99ffcc"  class='non_tech_track_13'>
                            <center>
                <a href="programacao/24">
                  <strong>Organização</strong>
                  <br/>
                  <em>Abertura Oficial  Pentaho Day Brasil 2015</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Organização</li>
                                  <li> Leonardo R. M. Matt</li>
                                  <li> Lincoln Paulo Martins Moreira</li>
                                  <li> Marcio Junior Vieira</li>
                                  <li> Pedro Alves</li>
                                  <li> Prof. Kristian Capeline</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 2, hour 2 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 3, hour 2 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 4, hour 2 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 5, hour 2 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 6, hour 2 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>09:00/09:45</th>
                                                          	    	    <!-- day 1, room 1, hour 3 -->
	    <td bgcolor="#FFCCFF"  class='non_tech_track_11'>
                            <center>
                <a href="programacao/81">
                  <strong>Assuntos Emergentes</strong>
                  <br/>
                  <em>Estratégia e Posicionamento da Pentaho</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Pedro Alves</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 2, hour 3 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 3, hour 3 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 4, hour 3 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 5, hour 3 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 6, hour 3 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>09:45/10:30</th>
                                                          	    	    <!-- day 1, room 1, hour 4 -->
	    <td bgcolor="#FFCCFF"  class='non_tech_track_11'>
                            <center>
                <a href="programacao/60">
                  <strong>Assuntos Emergentes</strong>
                  <br/>
                  <em>Inovação Social com Big Data e Internet das Coisas</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Marcelo Sales</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 2, hour 4 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 3, hour 4 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 4, hour 4 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 5, hour 4 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 6, hour 4 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>10:30/11:00</th>
                                                          	    	    <!-- day 1, room 1, hour 5 -->
	    <td bgcolor="#99ffcc"  class='non_tech_track_13'>
                            <center>
                <a href="programacao/33">
                  <strong>Organização</strong>
                  <br/>
                  <em>Cooffe Break e networking</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Organização</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 2, hour 5 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 3, hour 5 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 4, hour 5 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 5, hour 5 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 6, hour 5 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>11:00/11:45</th>
                                                          	    	    <!-- day 1, room 1, hour 6 -->
	    <td bgcolor="#CCCCFF"  class='non_tech_track_2'>
                            <center>
                <a href="programacao/13">
                  <strong>Ferramentas de BI & BA</strong>
                  <br/>
                  <em>Pentaho 6.0 - Visão e roadmap</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Pedro Alves</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 2, hour 6 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 3, hour 6 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 4, hour 6 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 5, hour 6 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 6, hour 6 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>11:45/13:15</th>
                                                          	    	    <!-- day 1, room 1, hour 7 -->
	    <td bgcolor="#99ffcc"  class='non_tech_track_13'>
                            <center>
                <a href="programacao/35">
                  <strong>Organização</strong>
                  <br/>
                  <em>Almoço Livre - Networking</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Organização</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 2, hour 7 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 3, hour 7 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 4, hour 7 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 5, hour 7 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 6, hour 7 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>13:15/14:00</th>
                                                          	    	    <!-- day 1, room 1, hour 8 -->
	    <td bgcolor="#CCCCFF"  class='non_tech_track_2'>
                            <center>
                <a href="programacao/7">
                  <strong>Ferramentas de BI & BA</strong>
                  <br/>
                  <em>Plugins made in Brazil</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Caio Moreno</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 2, hour 8 -->
	    <td bgcolor="#ccffff"  class='non_tech_track_3'>
                            <center>
                <a href="programacao/6">
                  <strong>Cases</strong>
                  <br/>
                  <em>Capes+ MTE + Dieese + MCTI + CNPq = Formação e empregabilidade no nível de pós-graduação</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Rodrigo Porto</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 3, hour 8 -->
	    <td bgcolor="#cccccc"  class='non_tech_track_1'>
                            <center>
                <a href="programacao/28">
                  <strong>Conceitual de BI & BA</strong>
                  <br/>
                  <em>O Que É BI? Nadando na Sopa de Letrinhas do BI</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Fábio de Salles</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 4, hour 8 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/37">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>Otimização e Tunning de Processos no PDI</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Mauricio Cesar Santos da Purificação</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 5, hour 8 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/39">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>Modelagem de Dados</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Wesley Seidel Carvalho</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 6, hour 8 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/11">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>CGG & Pentaho Reports</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Paulo Silva Pimentel Filho</li>
                		</ul>
                                                                        </td>
	                      </tr>
              <tr>
          <th>14:00/14:45</th>
                                                          	    	    <!-- day 1, room 1, hour 9 -->
	    <td bgcolor="#CCCCFF"  class='non_tech_track_2'>
                            <center>
                <a href="programacao/12">
                  <strong>Ferramentas de BI & BA</strong>
                  <br/>
                  <em>A evolução das ferramentas de Visualização baseadas no Mondrian OLAP Server</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Ricardo Gouvêa</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 2, hour 9 -->
	    <td bgcolor="#ccffff"  class='non_tech_track_3'>
                            <center>
                <a href="programacao/75">
                  <strong>Cases</strong>
                  <br/>
                  <em>SPOTPROMO - Pentaho ROI Excellence Awards 2014 - Adoção de Pentaho como Solução de BI para Trade Marketing</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Vinícius Zamuner</li>
                                  <li> Leandro Al Makul</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 3, hour 9 -->
	    <td bgcolor="#cccccc"  class='non_tech_track_1'>
                            <center>
                <a href="programacao/29">
                  <strong>Conceitual de BI & BA</strong>
                  <br/>
                  <em>Modelagem Dimensional seguindo as técnicas de Ralph Kimball</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Leandro Guimarães</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 4, hour 9 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 5, hour 9 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 6, hour 9 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>14:45/15:30</th>
                                                          	    	    <!-- day 1, room 1, hour 10 -->
	    <td bgcolor="#ff99ff"  class='non_tech_track_4'>
                            <center>
                <a href="programacao/57">
                  <strong>Data Mining</strong>
                  <br/>
                  <em>Ferramentas de Mineração de dados com Pentaho (PDI)</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Mailson Santos Filho</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 2, hour 10 -->
	    <td bgcolor="#ccffff"  class='non_tech_track_3'>
                            <center>
                <a href="programacao/5">
                  <strong>Cases</strong>
                  <br/>
                  <em>Pentaho no Ministério do Planejamento</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Ararigleno Fernandes</li>
                                  <li> Clauber Teixeira Rodrigues</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 3, hour 10 -->
	    <td bgcolor="#ff99ff"  class='non_tech_track_4'>
                            <center>
                <a href="programacao/21">
                  <strong>Data Mining</strong>
                  <br/>
                  <em>Conceitos de Data Mining</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Marcos Vinicius Fidelis</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 4, hour 10 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/27">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>Ctools Dashboards</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Pedro Alves</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 5, hour 10 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/41">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>Como instalar o Pentaho!</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Vinicius Alexandre Elyseu</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 6, hour 10 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/83">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>Pentaho data Integration ( Turma Extra)</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>João Paulo de Sousa Neto</li>
                		</ul>
                                                                        </td>
	                      </tr>
              <tr>
          <th>15:30/16:15</th>
                                                          	    	    <!-- day 1, room 1, hour 11 -->
	    <td bgcolor="#CCCCFF"  class='non_tech_track_2'>
                            <center>
                <a href="programacao/36">
                  <strong>Ferramentas de BI & BA</strong>
                  <br/>
                  <em>Pentaho a serviço da população: consumo de água e transportes públicos no Rio de Janeiro</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Rodrigo Porto</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 2, hour 11 -->
	    <td bgcolor="#ccffff"  class='non_tech_track_3'>
                            <center>
                <a href="programacao/54">
                  <strong>Cases</strong>
                  <br/>
                  <em>Case - Portal do Comércio Exterior</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Leandro Guimarães</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 3, hour 11 -->
	    <td bgcolor="#ffcc66"  class='non_tech_track_5'>
                            <center>
                <a href="programacao/9">
                  <strong>Big Data</strong>
                  <br/>
                  <em>Big Data, o que é isso ?</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Rafaela Raganham</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 4, hour 11 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 5, hour 11 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 6, hour 11 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>16:15/16:45</th>
                                                          	    	    <!-- day 1, room 1, hour 12 -->
	    <td bgcolor="#99ffcc"  class='non_tech_track_13'>
                            <center>
                <a href="programacao/34">
                  <strong>Organização</strong>
                  <br/>
                  <em>Coffee Break - Networking</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Organização</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 2, hour 12 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 3, hour 12 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 4, hour 12 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 5, hour 12 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 6, hour 12 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>16:45/17:30</th>
                                                          	    	    <!-- day 1, room 1, hour 13 -->
	    <td bgcolor="#ccffff"  class='non_tech_track_3'>
                            <center>
                <a href="programacao/45">
                  <strong>Cases</strong>
                  <br/>
                  <em>Construindo Dashboards com Kettle e dc.js</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>William Albert Trochmann</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 2, hour 13 -->
	    <td bgcolor="#ccffff"  class='non_tech_track_3'>
                            <center>
                <a href="programacao/58">
                  <strong>Cases</strong>
                  <br/>
                  <em>Utilizando Ferramentas de Data Mining em uma Operadora de Plano de Saúde</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Marcelo Rosano Dallagassa</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 3, hour 13 -->
	    <td bgcolor="#CCCCFF"  class='non_tech_track_2'>
                            <center>
                <a href="programacao/79">
                  <strong>Ferramentas de BI & BA</strong>
                  <br/>
                  <em>Pentaho Data Integration</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Paulo Silva Pimentel Filho</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 4, hour 13 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/10">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>Pentaho Data Integration</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Rafaela Raganham</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 5, hour 13 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/82">
                  <strong>Minicurso</strong>
                  <br/>
                  <em> Integração PDI, R-Script-Executor e Sparkl</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>André Sammarco</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 6, hour 13 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/8">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>introdução aos conceitos do HP Vertica</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Rodrigo Porto</li>
                		</ul>
                                                                        </td>
	                      </tr>
              <tr>
          <th>17:30/18:15</th>
                                                          	    	    <!-- day 1, room 1, hour 14 -->
	    <td bgcolor="#66ff33"  class='non_tech_track_10'>
                            <center>
                <a href="programacao/74">
                  <strong>Mobile BI</strong>
                  <br/>
                  <em>Uso de PDI integrado a soluções de mobilidade</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Vinícius Zamuner</li>
                                  <li> Leandro Al Makul</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 2, hour 14 -->
	    <td bgcolor="#ccffff"  class='non_tech_track_3'>
                            <center>
                <a href="programacao/38">
                  <strong>Cases</strong>
                  <br/>
                  <em>Migração de Processos de ETL no QlikView para PDI no Hospital Cárdio Pulmonar</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Mauricio Cesar Santos da Purificação</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 3, hour 14 -->
	    <td bgcolor="#cccccc"  class='non_tech_track_1'>
                            <center>
                <a href="programacao/1">
                  <strong>Conceitual de BI & BA</strong>
                  <br/>
                  <em>Carreira Profissional e Certificação de um Analista de BI Pentaho</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Marcio Junior Vieira</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 1, room 4, hour 14 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 5, hour 14 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 1, room 6, hour 14 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
          </table>
  <a name="dia2"></a>
  <h2>16 de Maio <span style='font-size: 10px;'>(<a href="#toc">voltar ao topo</a>)</span></h2>
    <table class='formulario grade' style='width: 100%;'>
      <tr>
        <th></th>
                  <th>
            Auditório Advanced
          </th>
                  <th>
            Auditório Cases & Business
          </th>
                  <th>
            Auditório Beginners
          </th>
                  <th>
            LAB Advanced
          </th>
                  <th>
            LAB Beginners
          </th>
                  <th>
            LAB Tools
          </th>
              </tr>
              <tr>
          <th>08:00/08:30</th>
                                                          	    	    <!-- day 2, room 1, hour 1 -->
	    <td bgcolor="#99ffcc"  class='non_tech_track_13'>
                            <center>
                <a href="programacao/26">
                  <strong>Organização</strong>
                  <br/>
                  <em>Credenciamento</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Organização</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 2, hour 1 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 3, hour 1 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 4, hour 1 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 5, hour 1 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 6, hour 1 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>08:30/09:00</th>
                                                          	    	    <!-- day 2, room 1, hour 2 -->
	    <td bgcolor="#cccccc"  class='non_tech_track_1'>
                            <center>
                <a href="programacao/78">
                  <strong>Conceitual de BI & BA</strong>
                  <br/>
                  <em>Desenvolvendo uma Metodologia Ágil para Projetos de BI</em> <br />
                  Nível: <em>Avancado</em>
		</a>
		<a href="materiais/palestra_Metodologia_BI_Pentaho_Day.pdf"><b>Slides da Apresentação</b></a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Marco Garcia</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 2, hour 2 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 3, hour 2 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 4, hour 2 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 5, hour 2 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 6, hour 2 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>09:00/09:45</th>
                                                          	    	    <!-- day 2, room 1, hour 3 -->
	    <td bgcolor="#ffcc66"  class='non_tech_track_5'>
                            <center>
                <a href="programacao/64">
                  <strong>Big Data</strong>
                  <br/>
                  <em>Hadoop - O que é e Onde Usar (Hortonworks)?</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Guilherme Braccialli</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 2, hour 3 -->
	    <td bgcolor="#ccffff"  class='non_tech_track_3'>
                            <center>
                <a href="programacao/23">
                  <strong>Cases</strong>
                  <br/>
                  <em>AMT - caso de uso de CTools</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Pedro Alves</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 3, hour 3 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 4, hour 3 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/53">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>Como monitorar a utilização e a performance do BI Server utilizando os plug-ins Pentaho CE Audit e Pentaho Performance Audit</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Caio Moreno</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 5, hour 3 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/30">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>Modelagem Dimensional na Prática</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Leandro Guimarães</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 6, hour 3 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/40">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>Utilizando jquery no Ctools</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Wesley Seidel Carvalho</li>
                		</ul>
                                                                        </td>
	                      </tr>
              <tr>
          <th>09:45/10:30</th>
                                                          	    	    <!-- day 2, room 1, hour 4 -->
	    <td bgcolor="#cccccc"  class='non_tech_track_1'>
                            <center>
                <a href="programacao/46">
                  <strong>Conceitual de BI & BA</strong>
                  <br/>
                  <em>Streamlined Data Refinery</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Iandé Coutinho</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 2, hour 4 -->
	    <td bgcolor="#ccffff"  class='non_tech_track_3'>
                            <center>
                <a href="programacao/31">
                  <strong>Cases</strong>
                  <br/>
                  <em>Multi Tenancy com Pentaho na SAGE</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Vinicius Alexandre Elyseu</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 3, hour 4 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 4, hour 4 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 5, hour 4 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 6, hour 4 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>10:30/11:00</th>
                                                          	    	    <!-- day 2, room 1, hour 5 -->
	    <td bgcolor="#99ffcc"  class='non_tech_track_13'>
                            <center>
                <a href="programacao/55">
                  <strong>Organização</strong>
                  <br/>
                  <em>Cooffe Break e networking</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Organização</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 2, hour 5 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 3, hour 5 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 4, hour 5 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 5, hour 5 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 6, hour 5 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>11:00/11:45</th>
                                                          	    	    <!-- day 2, room 1, hour 6 -->
	    <td bgcolor="#66CC33"  class='non_tech_track_9'>
                            <center>
                <a href="programacao/68">
                  <strong>Banco de Dados</strong>
                  <br/>
                  <em>Amazon Redshift</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Michel Pereira </li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 2, hour 6 -->
	    <td bgcolor="#cccccc"  class='non_tech_track_1'>
                            <center>
                <a href="programacao/73">
                  <strong>Conceitual de BI & BA</strong>
                  <br/>
                  <em>Entendendo o Usuário</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Ronan Cezar</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 3, hour 6 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 4, hour 6 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 5, hour 6 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 6, hour 6 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>11:45/13:15</th>
                                                          	    	    <!-- day 2, room 1, hour 7 -->
	    <td bgcolor="#99ffcc"  class='non_tech_track_13'>
                            <center>
                <a href="programacao/71">
                  <strong>Organização</strong>
                  <br/>
                  <em>Almoço Livre - Networking</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Organização</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 2, hour 7 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 3, hour 7 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 4, hour 7 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 5, hour 7 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 6, hour 7 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>13:15/14:00</th>
                                                          	    	    <!-- day 2, room 1, hour 8 -->
	    <td bgcolor="#CCCCFF"  class='non_tech_track_2'>
                            <center>
                <a href="programacao/47">
                  <strong>Ferramentas de BI & BA</strong>
                  <br/>
                  <em>Cluster BI Server - Segurança e disponibilidade em um ambiente complexo com balanceador de carga e certificado digital</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Rodrigo França Muniz</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 2, hour 8 -->
	    <td bgcolor="#ccffff"  class='non_tech_track_3'>
                            <center>
                <a href="programacao/59">
                  <strong>Cases</strong>
                  <br/>
                  <em>Pentaho na Auto Viação 1001</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Luiz Vianna</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 3, hour 8 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 4, hour 8 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/49">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>CDE com Bootstrap</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Marcello Pontes</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 5, hour 8 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/43">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>Pentaho Schema Workbench</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>João Paulo de Sousa Neto</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 6, hour 8 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/65">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>Pentaho + Hadoop = Exploração e Visualização de dados (Hortonworks)</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Guilherme Braccialli</li>
                		</ul>
                                                                        </td>
	                      </tr>
              <tr>
          <th>14:00/14:45</th>
                                                          	    	    <!-- day 2, room 1, hour 9 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 2, hour 9 -->
	    <td bgcolor="#ccffff"  class='non_tech_track_3'>
                            <center>
                <a href="programacao/42">
                  <strong>Cases</strong>
                  <br/>
                  <em>OPS - Observatório de Políticas Sociais na Prefeitura Municipal de Fortaleza</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>João Paulo de Sousa Neto</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 3, hour 9 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 4, hour 9 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 5, hour 9 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 6, hour 9 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>14:45/15:30</th>
                                                          	    	    <!-- day 2, room 1, hour 10 -->
	    <td bgcolor="#ffcc66"  class='non_tech_track_5'>
                            <center>
                <a href="programacao/50">
                  <strong>Big Data</strong>
                  <br/>
                  <em>Mecanismo de aprendizagem para apoio à decisão com Big Data em cenários complexos</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Eliomar Araújo de Lima</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 2, hour 10 -->
	    <td bgcolor="#ccffff"  class='non_tech_track_3'>
                            <center>
                <a href="programacao/48">
                  <strong>Cases</strong>
                  <br/>
                  <em>Pentaho no Sistema de Análise Fotovoltaico da UFSC</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Diego Rodrigues Ferreira</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 3, hour 10 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 4, hour 10 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/56">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>R/MatLab e Pentaho Data Integration</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Mailson Santos Filho</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 5, hour 10 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/22">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>Pentaho Data Mining (PDM) na prática</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Marcos Vinicius Fidelis</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 6, hour 10 -->
	    <td bgcolor="#999966"  class='non_tech_track_12'>
                            <center>
                <a href="programacao/69">
                  <strong>Minicurso</strong>
                  <br/>
                  <em>Amazon Redshift</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Michel Pereira </li>
                		</ul>
                                                                        </td>
	                      </tr>
              <tr>
          <th>15:30/16:15</th>
                                                          	    	    <!-- day 2, room 1, hour 11 -->
	    <td bgcolor="#CCCCFF"  class='non_tech_track_2'>
                            <center>
                <a href="programacao/44">
                  <strong>Ferramentas de BI & BA</strong>
                  <br/>
                  <em>Melhorando tudo com Plugins</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Marcello Pontes</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 2, hour 11 -->
	    <td bgcolor="#ccffff"  class='non_tech_track_3'>
                            <center>
                <a href="programacao/52">
                  <strong>Cases</strong>
                  <br/>
                  <em>CASE – O apoio do Pentaho nas ações da ASA Brasil</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Maria Amélia Pessoa da Silva</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 3, hour 11 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 4, hour 11 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 5, hour 11 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 6, hour 11 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>16:15/16:45</th>
                                                          	    	    <!-- day 2, room 1, hour 12 -->
	    <td bgcolor="#99ffcc"  class='non_tech_track_13'>
                            <center>
                <a href="programacao/70">
                  <strong>Organização</strong>
                  <br/>
                  <em>Coffee Break - Networking</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Organização</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 2, hour 12 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 3, hour 12 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 4, hour 12 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 5, hour 12 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 6, hour 12 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>16:45/17:30</th>
                                                          	    	    <!-- day 2, room 1, hour 13 -->
	    <td bgcolor="#CCCCFF"  class='non_tech_track_2'>
                            <center>
                <a href="programacao/4">
                  <strong>Ferramentas de BI & BA</strong>
                  <br/>
                  <em>Suporte a Geo-Mapping no Pentaho Report Designer usando a arquitetura do PDI e das CTools (CDE,CDA,CGG,Protovis)</em> <br />
                  Nível: <em>Avancado</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Marcio Junior Vieira</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 2, hour 13 -->
	    <td bgcolor="#ccffff"  class='non_tech_track_3'>
                            <center>
                <a href="programacao/76">
                  <strong>Cases</strong>
                  <br/>
                  <em>BI salvando vidas</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>José Renato Agostinho da Silva</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 3, hour 13 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 4, hour 13 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 5, hour 13 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 6, hour 13 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
              <tr>
          <th>17:30/18:15</th>
                                                          	    	    <!-- day 2, room 1, hour 14 -->
	    <td bgcolor="#99ffcc"  class='non_tech_track_13'>
                            <center>
                <a href="programacao/32">
                  <strong>Organização</strong>
                  <br/>
                  <em>Encerramento e Sorteio de Brindes</em> <br />
                  Nível: <em>Iniciante</em>
		</a>
                <br/>
                <br/>
              </center>
		<ul style='padding-left: 20px;'>
                <li>Organização</li>
                		</ul>
                                                                        </td>
	                                                              	    	    <!-- day 2, room 2, hour 14 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 3, hour 14 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 4, hour 14 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 5, hour 14 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                                                              	    	    <!-- day 2, room 6, hour 14 -->
	    <td bgcolor=""  class='non_tech_track_'>
                          </td>
	                      </tr>
          </table>
</div>

<div style='text-align: center; margin: 1em;'>
Dúvidas? Escreva para <code><script type="text/javascript">eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%27%3c%61%20%68%72%65%66%3d%22%6d%61%69%6c%74%6f%3a%6d%61%72%63%69%6f%40%61%6d%62%69%65%6e%74%65%6c%69%76%72%65%2e%63%6f%6d%2e%62%72%22%20%3e%6d%61%72%63%69%6f%40%61%6d%62%69%65%6e%74%65%6c%69%76%72%65%2e%63%6f%6d%2e%62%72%3c%2f%61%3e%27%29%3b'))</script></code>
</div>
</body>
</html>
