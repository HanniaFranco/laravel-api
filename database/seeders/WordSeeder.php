<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Word;
use App\Models\Category;

class WordSeeder extends Seeder
{
    public function run(): void
    {
        /**
         * En esta parte vamos a definir un arreglo en el cual vamos a guardar las palabras 
         * y respuestas de cada una de las categorías que tenemos.
         */
        $words = [
            /**
             * Palabras de la categoría Biología
             */
            'Biología' => [
                [
                    'word' => 'Ósmosis',
                    'correct' => 'Movimiento de moléculas de agua a través de una membrana semipermeable desde una región de menor concentración de solutos a una de mayor concentración.',
                    'incorrect' => [
                        'Proceso de división celular que resulta en dos células hijas idénticas.',
                        'Intercambio de gases entre los organismos y su entorno.',
                        'Forma en que las plantas generan alimento usando la luz solar.',
                    ],
                    'explanation' => 'La ósmosis es fundamental para el transporte de agua en las células.'
                ],
                [
                    'word' => 'Fotosíntesis',
                    'correct' => 'Proceso por el cual las plantas convierten la luz solar en energía química.',
                    'incorrect' => [
                        'Respiración celular.',
                        'Digestión.',
                        'Evaporación.',
                    ],
                    'explanation' => 'La fotosíntesis produce oxígeno y glucosa.'
                ],
                [
                    'word' => 'ADN',
                    'correct' => 'Molécula que contiene la información genética de los seres vivos.',
                    'incorrect' => [
                        'Proteína que transporta oxígeno en la sangre.',
                        'Organelo celular que produce energía.',
                        'Molécula que almacena energía en las células.',
                    ],
                    'explanation' => 'El ADN se encuentra en el núcleo de las células y contiene los genes.'
                ],
                [
                    'word' => 'Mitosis',
                    'correct' => 'Proceso de división celular que resulta en dos células hijas idénticas.',
                    'incorrect' => [
                        'Proceso de formación de gametos.',
                        'Intercambio de material genético entre cromosomas.',
                        'División del citoplasma durante la división celular.',
                    ],
                    'explanation' => 'La mitosis es esencial para el crecimiento y la reparación de tejidos.'
                ],
                [
                    'word' => 'Clorofila',
                    'correct' => 'Pigmento verde en las plantas que absorbe la luz para la fotosíntesis.',
                    'incorrect' => [
                        'Hormona que regula el crecimiento de las plantas.',
                        'Enzima que cataliza reacciones químicas en las células.',
                        'Molécula que almacena energía en las plantas.',
                    ],
                    'explanation' => 'La clorofila se encuentra en los cloroplastos de las células vegetales.'
                ],
                [
                    'word' => 'Ecosistema',
                    'correct' => 'Conjunto de organismos y su entorno físico que interactúan en un área determinada.',
                    'incorrect' => [
                        'Grupo de organismos de la misma especie que viven en un área.',
                        'Proceso de descomposición de materia orgánica.',
                        'Ciclo de nutrientes en el suelo.',
                    ],
                    'explanation' => 'Los ecosistemas pueden ser terrestres, acuáticos o marinos.'
                ],
                [
                    'word' => 'Mutación',
                    'correct' => 'Cambio en la secuencia de ADN de un organismo.',
                    'incorrect' => [
                        'Proceso de adaptación de los organismos a su entorno.',
                        'Interacción entre diferentes especies en un ecosistema.',
                        'Transferencia de energía entre niveles tróficos.',
                    ],
                    'explanation' => 'Las mutaciones pueden ser beneficiosas, perjudiciales o neutras.'
                ],
                [
                    'word' => 'Homeostasis',
                    'correct' => 'Mantenimiento de un ambiente interno estable en un organismo.',
                    'incorrect' => [
                        'Proceso de eliminación de desechos del cuerpo.',
                        'Intercambio de gases entre los organismos y su entorno.',
                        'Producción de energía a partir de nutrientes.',
                    ],
                    'explanation' => 'La homeostasis es esencial para el funcionamiento adecuado de los organismos.'
                ],
                [
                    'word' => 'Genoma',
                    'correct' => 'Conjunto completo de genes o material genético de un organismo.',
                    'incorrect' => [
                        'Molécula que transporta oxígeno en la sangre.',
                        'Organelo celular que produce energía.',
                        'Molécula que almacena energía en las células.',
                    ],
                    'explanation' => 'El genoma incluye todo el ADN de un organismo, incluyendo genes y secuencias no codificantes.'
                ],
                [
                    'word' => 'Selección natural',
                    'correct' => 'Proceso por el cual los organismos mejor adaptados a su entorno tienen más probabilidades de sobrevivir y reproducirse.',
                    'incorrect' => [
                        'Transferencia de energía entre niveles tróficos.',
                        'Interacción entre diferentes especies en un ecosistema.',
                        'Cambio en la secuencia de ADN de un organismo.',
                    ],
                    'explanation' => 'La selección natural es un mecanismo clave de la evolución.'
                ],
            ],
            /**
             * Palabras de la categoría Historia
             */
            'Historia' => [
                [
                    'word' => 'Renacimiento',
                    'correct' => 'Movimiento cultural europeo que marcó el fin de la Edad Media y el inicio de la Edad Moderna.',
                    'incorrect' => [
                        'Periodo en el que se construyeron las pirámides de Egipto.',
                        'Época en la que cayó el Imperio Romano de Oriente.',
                        'Conflicto bélico entre Alemania y Francia.',
                    ],
                    'explanation' => 'El Renacimiento impulsó el arte, la ciencia y la filosofía.'
                ],
                [
                    'word' => 'Revolución Francesa',
                    'correct' => 'Movimiento social y político en Francia que resultó en la caída de la monarquía y el establecimiento de una república.',
                    'incorrect' => [
                        'Guerra civil en Estados Unidos.',
                        'Conflicto entre España y sus colonias americanas.',
                        'Periodo de expansión del Imperio Romano.',
                    ],
                    'explanation' => 'La Revolución Francesa tuvo un impacto profundo en la historia de Europa y el mundo.'
                ],
                [
                    'word' => 'Edad Media',
                    'correct' => 'Periodo histórico que abarca desde la caída del Imperio Romano de Occidente hasta el Renacimiento.',
                    'incorrect' => [
                        'Época de la construcción de las pirámides de Egipto.',
                        'Periodo de la Revolución Industrial.',
                        'Era de los descubrimientos geográficos.',
                    ],
                    'explanation' => 'La Edad Media se caracteriza por el feudalismo y la influencia de la Iglesia.'
                ],
                [
                    'word' => 'Ilustración',
                    'correct' => 'Movimiento intelectual del siglo XVIII que promovió la razón, la ciencia y los derechos humanos.',
                    'incorrect' => [
                        'Periodo de expansión del Imperio Romano.',
                        'Movimiento artístico del siglo XIX.',
                        'Conflicto bélico entre Alemania y Francia.',
                    ],
                    'explanation' => 'La Ilustración influyó en la Revolución Francesa y en la formación de las democracias modernas.'
                ],
                [
                    'word' => 'Guerra Fría',
                    'correct' => 'Periodo de tensión política y militar entre Estados Unidos y la Unión Soviética después de la Segunda Guerra Mundial.',
                    'incorrect' => [
                        'Conflicto armado entre Alemania y Francia.',
                        'Guerra civil en Estados Unidos.',
                        'Periodo de expansión del Imperio Romano.',
                    ],
                    'explanation' => 'La Guerra Fría se caracterizó por la carrera armamentista y la competencia espacial.'
                ],
                [
                    'word' => 'Imperio Romano',
                    'correct' => 'Estado que dominó gran parte de Europa, el norte de África y el Medio Oriente desde el siglo I a.C. hasta el siglo V d.C.',
                    'incorrect' => [
                        'Civilización que construyó las pirámides de Egipto.',
                        'Reino medieval en Europa.',
                        'Confederación de tribus germánicas.',
                    ],
                    'explanation' => 'El Imperio Romano dejó un legado duradero en la cultura, el derecho y la arquitectura.'
                ],
                [
                    'word' => 'Revolución Industrial',
                    'correct' => 'Periodo de cambios tecnológicos y económicos en el siglo XVIII y XIX que transformó la producción y la sociedad.',
                    'incorrect' => [
                        'Movimiento artístico del siglo XIX.',
                        'Conflicto bélico entre Alemania y Francia.',
                        'Periodo de expansión del Imperio Romano.',
                    ],
                    'explanation' => 'La Revolución Industrial marcó el inicio de la era moderna y la economía de mercado.'
                ],
                [
                    'word' => 'Descubrimiento de América',
                    'correct' => 'Evento histórico en 1492 cuando Cristóbal Colón llegó al continente americano.',
                    'incorrect' => [
                        'Viaje de Marco Polo a China.',
                        'Exploración de África por los europeos.',
                        'Colonización de Australia por los británicos.',
                    ],
                    'explanation' => 'El descubrimiento de América tuvo un impacto profundo en la historia mundial.'
                ],
                [
                    'word' => 'Reforma Protestante',
                    'correct' => 'Movimiento religioso del siglo XVI que resultó en la creación de iglesias protestantes y la división del cristianismo occidental.',
                    'incorrect' => [
                        'Periodo de expansión del Imperio Romano.',
                        'Conflicto bélico entre Alemania y Francia.',
                        'Movimiento artístico del siglo XIX.',
                    ],
                    'explanation' => 'La Reforma Protestante fue iniciada por Martín Lutero y tuvo un impacto duradero en la religión y la política.'
                ],
                [
                    'word' => 'Antiguo Egipto',
                    'correct' => 'Civilización que se desarrolló a lo largo del río Nilo y es conocida por sus pirámides y faraones.',
                    'incorrect' => [
                        'Imperio que dominó gran parte de Europa.',
                        'Civilización que construyó la Gran Muralla China.',
                        'Reino medieval en Europa.',
                    ],
                    'explanation' => 'El Antiguo Egipto dejó un legado duradero en la arquitectura, la escritura y la religión.'
                ],
            ],
            /**
             * Palabras de la categoría Tecnología
             */
            'Tecnología' => [
                [
                    'word' => 'Algoritmo',
                    'correct' => 'Conjunto de instrucciones definidas y ordenadas que permiten realizar una actividad.',
                    'incorrect' => [
                        'Dispositivo electrónico para reproducir música.',
                        'Lenguaje de programación de alto nivel.',
                        'Código que almacena imágenes en una base de datos.',
                    ],
                    'explanation' => 'Los algoritmos son fundamentales en la informática y la programación.'
                ],
                [
                    'word' => 'Inteligencia Artificial',
                    'correct' => 'Campo de estudio que busca crear sistemas capaces de realizar tareas que requieren inteligencia humana.',
                    'incorrect' => [
                        'Método de almacenamiento de datos.',
                        'Proceso de fabricación de hardware.',
                        'Lenguaje de programación específico.',
                    ],
                    'explanation' => 'La inteligencia artificial está revolucionando múltiples industrias.'
                ],
                [
                    'word' => 'Blockchain',
                    'correct' => 'Tecnología de registro distribuido que asegura la integridad de las transacciones.',
                    'incorrect' => [
                        'Sistema operativo para computadoras.',
                        'Algoritmo de compresión de datos.',
                        'Red social para profesionales.',
                    ],
                    'explanation' => 'El blockchain es la base de las criptomonedas como Bitcoin.'
                ],
                [
                    'word' => 'Big Data',
                    'correct' => 'Conjunto de datos tan grandes y complejos que requieren tecnologías avanzadas para su procesamiento.',
                    'incorrect' => [
                        'Pequeños conjuntos de datos.',
                        'Algoritmo de búsqueda en internet.',
                        'Sistema de gestión de bases de datos.',
                    ],
                    'explanation' => 'El análisis de Big Data permite obtener insights valiosos para las empresas.'
                ],
                [
                    'word' => 'Ciberseguridad',
                    'correct' => 'Práctica de proteger sistemas, redes y programas de ataques digitales.',
                    'incorrect' => [
                        'Desarrollo de aplicaciones móviles.',
                        'Diseño de interfaces de usuario.',
                        'Optimización de motores de búsqueda.',
                    ],
                    'explanation' => 'La ciberseguridad es crucial para proteger la información sensible.'
                ],
                [
                    'word' => 'Internet de las Cosas',
                    'correct' => 'Red de dispositivos conectados que pueden interactuar entre sí y con el entorno.',
                    'incorrect' => [
                        'Sistema de gestión de contenido.',
                        'Algoritmo de inteligencia artificial.',
                        'Lenguaje de programación web.',
                    ],
                    'explanation' => 'El Internet de las Cosas está transformando hogares y ciudades.'
                ],
                [
                    'word' => 'Machine Learning',
                    'correct' => 'Subcampo de la inteligencia artificial que permite a las máquinas aprender de los datos.',
                    'incorrect' => [
                        'Proceso de diseño de hardware.',
                        'Método de almacenamiento de datos.',
                        'Sistema operativo para computadoras.',
                    ],
                    'explanation' => 'El Machine Learning se utiliza en aplicaciones como el reconocimiento de voz.'
                ],
                [
                    'word' => 'Cloud Computing',
                    'correct' => 'Entrega de servicios informáticos a través de internet.',
                    'incorrect' => [
                        'Desarrollo de software local.',
                        'Diseño de redes físicas.',
                        'Optimización de motores de búsqueda.',
                    ],
                    'explanation' => 'El Cloud Computing permite acceder a recursos informáticos desde cualquier lugar.'
                ],
                [
                    'word' => 'Realidad Virtual',
                    'correct' => 'Tecnología que permite crear entornos simulados interactivos.',
                    'incorrect' => [
                        'Sistema de gestión de bases de datos.',
                        'Algoritmo de compresión de datos.',
                        'Red social para profesionales.',
                    ],
                    'explanation' => 'La Realidad Virtual se utiliza en videojuegos y simulaciones.'
                ],
                [
                    'word' => 'Redes Neuronales',
                    'correct' => 'Modelos computacionales inspirados en el cerebro humano que se utilizan en el aprendizaje automático.',
                    'incorrect' => [
                        'Sistema operativo para computadoras.',
                        'Método de almacenamiento de datos.',
                        'Proceso de fabricación de hardware.',
                    ],
                    'explanation' => 'Las redes neuronales son fundamentales en el campo de la inteligencia artificial.'
                ],
            ],
            /**
             * Palabras de la categoría Cocina
             */
            'Cocina' => [
                [
                    'word' => 'Emulsionar',
                    'correct' => 'Mezclar dos líquidos que normalmente no se mezclan, como aceite y vinagre.',
                    'incorrect' => [
                        'Hervir alimentos durante largo tiempo.',
                        'Tostar pan en un horno especial.',
                        'Cortar en tiras delgadas un vegetal.',
                    ],
                    'explanation' => 'Emulsionar es clave para hacer salsas como la mayonesa.'
                ],
                [
                    'word' => 'Sofreír',
                    'correct' => 'Cocinar alimentos a fuego medio en aceite hasta que estén dorados.',
                    'incorrect' => [
                        'Hervir alimentos en agua.',
                        'Cocinar al vapor.',
                        'Asar alimentos en el horno.',
                    ],
                    'explanation' => 'Sofreír es una técnica básica en la cocina para resaltar sabores.'
                ],
                [
                    'word' => 'Blanquear',
                    'correct' => 'Sumergir alimentos en agua hirviendo brevemente y luego en agua fría.',
                    'incorrect' => [
                        'Cocinar alimentos en el horno.',
                        'Freír alimentos en aceite.',
                        'Cortar alimentos en cubos pequeños.',
                    ],
                    'explanation' => 'Blanquear ayuda a mantener el color y textura de los vegetales.'
                ],
                [
                    'word' => 'Roux',
                    'correct' => 'Mezcla de harina y grasa que se cocina y se usa para espesar salsas.',
                    'incorrect' => [
                        'Salsa hecha con tomate y especias.',
                        'Método de cocción al vapor.',
                        'Técnica de marinar carnes.',
                    ],
                    'explanation' => 'El roux es la base de muchas salsas clásicas como la bechamel.'
                ],
                [
                    'word' => 'Brunoise',
                    'correct' => 'Corte de vegetales en cubos muy pequeños y uniformes.',
                    'incorrect' => [
                        'Corte de vegetales en tiras largas.',
                        'Corte de vegetales en rodajas gruesas.',
                        'Corte de vegetales en trozos irregulares.',
                    ],
                    'explanation' => 'El corte brunoise se utiliza en preparaciones como la mirepoix.'
                ],
                [
                    'word' => 'Caramelizar',
                    'correct' => 'Cocinar azúcar hasta que se derrita y se vuelva dorada.',
                    'incorrect' => [
                        'Hervir azúcar en agua.',
                        'Mezclar azúcar con harina.',
                        'Cortar azúcar en cubos.',
                    ],
                    'explanation' => 'Caramelizar es esencial para hacer postres como el flan.'
                ],
                [
                    'word' => 'Desglasar',
                    'correct' => 'Añadir líquido a una sartén caliente para disolver los restos de alimentos y hacer una salsa.',
                    'incorrect' => [
                        'Cocinar alimentos en agua.',
                        'Freír alimentos en aceite.',
                        'Cortar alimentos en cubos pequeños.',
                    ],
                    'explanation' => 'Desglasar es una técnica utilizada para hacer salsas sabrosas.'
                ],
                [
                    'word' => 'Macerar',
                    'correct' => 'Dejar alimentos en un líquido para que absorban su sabor.',
                    'incorrect' => [
                        'Cocinar alimentos en el horno.',
                        'Freír alimentos en aceite.',
                        'Cortar alimentos en tiras largas.',
                    ],
                    'explanation' => 'Macerar es común en la preparación de frutas para postres.'
                ],
                [
                    'word' => 'Escalfar',
                    'correct' => 'Cocinar alimentos en agua caliente pero no hirviendo.',
                    'incorrect' => [
                        'Hervir alimentos en agua.',
                        'Freír alimentos en aceite.',
                        'Cocinar alimentos al vapor.',
                    ],
                    'explanation' => 'Escalfar es ideal para cocinar huevos y pescados delicados.'
                ],
                [
                    'word' => 'Glasear',
                    'correct' => 'Cubrir alimentos con una capa brillante de azúcar o salsa.',
                    'incorrect' => [
                        'Hervir alimentos en agua.',
                        'Freír alimentos en aceite.',
                        'Cortar alimentos en cubos pequeños.',
                    ],
                    'explanation' => 'Glasear se utiliza en la preparación de postres y carnes.'
                ],
            ],
            /**
             * Palabras de la categoría Física
             */
            'Física' => [
                [
                    'word' => 'Inercia',
                    'correct' => 'Tendencia de un cuerpo a mantener su estado de reposo o movimiento si no se aplica una fuerza externa.',
                    'incorrect' => [
                        'Fuerza que empuja hacia abajo un objeto pesado.',
                        'Capacidad de un objeto para emitir calor.',
                        'Cambio de dirección de un rayo de luz.',
                    ],
                    'explanation' => 'La inercia es una propiedad fundamental de la materia.'
                ],
                [
                    'word' => 'Gravedad',
                    'correct' => 'Fuerza de atracción entre dos cuerpos debido a su masa.',
                    'incorrect' => [
                        'Fuerza que empuja hacia arriba un objeto ligero.',
                        'Capacidad de un objeto para emitir luz.',
                        'Cambio de dirección de un rayo de sonido.',
                    ],
                    'explanation' => 'La gravedad es responsable de mantener los planetas en órbita.'
                ],
                [
                    'word' => 'Energía Cinética',
                    'correct' => 'Energía que posee un cuerpo debido a su movimiento.',
                    'incorrect' => [
                        'Energía almacenada en un objeto en reposo.',
                        'Capacidad de un objeto para emitir calor.',
                        'Cambio de dirección de un rayo de luz.',
                    ],
                    'explanation' => 'La energía cinética depende de la masa y la velocidad del objeto.'
                ],
                [
                    'word' => 'Fuerza',
                    'correct' => 'Interacción que cambia el estado de movimiento de un objeto.',
                    'incorrect' => [
                        'Capacidad de un objeto para emitir luz.',
                        'Cambio de dirección de un rayo de sonido.',
                        'Energía almacenada en un objeto en reposo.',
                    ],
                    'explanation' => 'La fuerza se mide en newtons y puede ser de contacto o a distancia.'
                ],
                [
                    'word' => 'Trabajo',
                    'correct' => 'Producto de la fuerza aplicada a un objeto y la distancia que recorre.',
                    'incorrect' => [
                        'Energía almacenada en un objeto en reposo.',
                        'Capacidad de un objeto para emitir calor.',
                        'Cambio de dirección de un rayo de luz.',
                    ],
                    'explanation' => 'El trabajo se mide en joules y es una forma de transferencia de energía.'
                ],
                [
                    'word' => 'Potencia',
                    'correct' => 'Cantidad de trabajo realizado por unidad de tiempo.',
                    'incorrect' => [
                        'Energía almacenada en un objeto en reposo.',
                        'Capacidad de un objeto para emitir luz.',
                        'Cambio de dirección de un rayo de sonido.',
                    ],
                    'explanation' => 'La potencia se mide en watts y es una medida de la rapidez con la que se realiza el trabajo.'
                ],
                [
                    'word' => 'Presión',
                    'correct' => 'Fuerza ejercida por unidad de área.',
                    'incorrect' => [
                        'Capacidad de un objeto para emitir calor.',
                        'Cambio de dirección de un rayo de luz.',
                        'Energía almacenada en un objeto en reposo.',
                    ],
                    'explanation' => 'La presión se mide en pascales y es importante en fluidos.'
                ],
                [
                    'word' => 'Temperatura',
                    'correct' => 'Medida de la energía cinética promedio de las partículas en un objeto.',
                    'incorrect' => [
                        'Capacidad de un objeto para emitir luz.',
                        'Cambio de dirección de un rayo de sonido.',
                        'Energía almacenada en un objeto en reposo.',
                    ],
                    'explanation' => 'La temperatura se mide en grados Celsius, Fahrenheit o Kelvin.'
                ],
                [
                    'word' => 'Velocidad',
                    'correct' => 'Cambio de posición de un objeto por unidad de tiempo.',
                    'incorrect' => [
                        'Capacidad de un objeto para emitir calor.',
                        'Cambio de dirección de un rayo de luz.',
                        'Energía almacenada en un objeto en reposo.',
                    ],
                    'explanation' => 'La velocidad se mide en metros por segundo y tiene dirección.'
                ],
                [
                    'word' => 'Aceleración',
                    'correct' => 'Cambio de velocidad de un objeto por unidad de tiempo.',
                    'incorrect' => [
                        'Capacidad de un objeto para emitir luz.',
                        'Cambio de dirección de un rayo de sonido.',
                        'Energía almacenada en un objeto en reposo.',
                    ],
                    'explanation' => 'La aceleración se mide en metros por segundo al cuadrado.'
                ],
            ],
            /**
             * Palabras de la categoría Música
             */
            'Música' => [
                [
                    'word' => 'Acorde',
                    'correct' => 'Conjunto de tres o más notas musicales que suenan simultáneamente.',
                    'incorrect' => [
                        'Ritmo marcado por una batería.',
                        'Nota musical más alta de una escala.',
                        'Silencio dentro de una partitura.',
                    ],
                    'explanation' => 'Un acorde es una combinación de notas que suenan bien juntas.'
                ],
                [
                    'word' => 'Sinfonía',
                    'correct' => 'Composición musical para orquesta, generalmente en cuatro movimientos.',
                    'incorrect' => [
                        'Canción popular de corta duración.',
                        'Pieza musical para un solo instrumento.',
                        'Obra musical con letra.',
                    ],
                    'explanation' => 'Las sinfonías son obras extensas y complejas.'
                ],
                [
                    'word' => 'Pentagrama',
                    'correct' => 'Conjunto de cinco líneas y cuatro espacios donde se escriben las notas musicales.',
                    'incorrect' => [
                        'Instrumento de percusión.',
                        'Tipo de acorde.',
                        'Escala musical.',
                    ],
                    'explanation' => 'El pentagrama es esencial para la notación musical.'
                ],
                [
                    'word' => 'Arpegio',
                    'correct' => 'Notas de un acorde tocadas en sucesión, no simultáneamente.',
                    'incorrect' => [
                        'Ritmo rápido y repetitivo.',
                        'Cambio de tonalidad en una pieza.',
                        'Silencio prolongado en una obra.',
                    ],
                    'explanation' => 'Los arpegios son comunes en la música clásica y moderna.'
                ],
                [
                    'word' => 'Crescendo',
                    'correct' => 'Aumento gradual del volumen de la música.',
                    'incorrect' => [
                        'Disminución del tempo.',
                        'Cambio de tonalidad.',
                        'Repetición de un tema musical.',
                    ],
                    'explanation' => 'El crescendo añade emoción y dinamismo a la música.'
                ],
                [
                    'word' => 'Fuga',
                    'correct' => 'Composición polifónica basada en un tema principal que se repite en diferentes voces.',
                    'incorrect' => [
                        'Pieza musical para piano solo.',
                        'Canción con letra romántica.',
                        'Obra musical de corta duración.',
                    ],
                    'explanation' => 'Las fugas son conocidas por su complejidad y estructura.'
                ],
                [
                    'word' => 'Intervalo',
                    'correct' => 'Distancia entre dos notas musicales.',
                    'incorrect' => [
                        'Parte de una sinfonía.',
                        'Instrumento de cuerda.',
                        'Tipo de ritmo.',
                    ],
                    'explanation' => 'Los intervalos son fundamentales para la armonía.'
                ],
                [
                    'word' => 'Octava',
                    'correct' => 'Intervalo de ocho notas en una escala musical.',
                    'incorrect' => [
                        'Parte de una ópera.',
                        'Tipo de acorde.',
                        'Ritmo rápido.',
                    ],
                    'explanation' => 'La octava es un intervalo muy común en la música.'
                ],
                [
                    'word' => 'Tonalidad',
                    'correct' => 'Organización de una composición musical alrededor de una nota principal.',
                    'incorrect' => [
                        'Cambio de ritmo.',
                        'Repetición de un tema.',
                        'Aumento del volumen.',
                    ],
                    'explanation' => 'La tonalidad define la estructura armónica de una pieza.'
                ],
                [
                    'word' => 'Contrapunto',
                    'correct' => 'Técnica de composición que combina dos o más líneas melódicas independientes.',
                    'incorrect' => [
                        'Cambio de tempo.',
                        'Repetición de un acorde.',
                        'Aumento del volumen.',
                    ],
                    'explanation' => 'El contrapunto es una técnica avanzada en la música.'
                ],
            ],
            /**
             * Palabras de la categoría Swift
             */
            'Swift' => [
                [
                    'word' => 'Optional',
                    'correct' => 'Tipo de variable que puede contener un valor o “nil”.',
                    'incorrect' => [
                        'Función que se ejecuta automáticamente.',
                        'Estructura que crea clases en Swift.',
                        'Variable constante que no cambia nunca.',
                    ],
                    'explanation' => 'Los optionals son fundamentales para manejar valores nulos en Swift.'
                ],
                [
                    'word' => 'Closure',
                    'correct' => 'Bloque de código que puede ser pasado y ejecutado en cualquier parte del programa.',
                    'incorrect' => [
                        'Función que se ejecuta al inicio del programa.',
                        'Variable que almacena un valor constante.',
                        'Estructura que define una clase.',
                    ],
                    'explanation' => 'Los closures son muy útiles para manejar callbacks y funciones anónimas.'
                ],
                [
                    'word' => 'Enum',
                    'correct' => 'Tipo de dato que define un grupo de valores relacionados.',
                    'incorrect' => [
                        'Variable que almacena un valor constante.',
                        'Función que se ejecuta automáticamente.',
                        'Estructura que define una clase.',
                    ],
                    'explanation' => 'Los enums son útiles para manejar valores predefinidos en Swift.'
                ],
                [
                    'word' => 'Protocol',
                    'correct' => 'Definición de métodos y propiedades que pueden ser adoptados por una clase o estructura.',
                    'incorrect' => [
                        'Variable que almacena un valor constante.',
                        'Función que se ejecuta automáticamente.',
                        'Estructura que define una clase.',
                    ],
                    'explanation' => 'Los protocols permiten definir interfaces comunes para diferentes tipos.'
                ],
                [
                    'word' => 'Struct',
                    'correct' => 'Estructura que permite agrupar datos y funciones relacionadas.',
                    'incorrect' => [
                        'Variable que almacena un valor constante.',
                        'Función que se ejecuta automáticamente.',
                        'Tipo de dato que define un grupo de valores relacionados.',
                    ],
                    'explanation' => 'Las structs son útiles para agrupar datos relacionados en Swift.'
                ],
                [
                    'word' => 'Guard',
                    'correct' => 'Declaración que permite salir de una función si una condición no se cumple.',
                    'incorrect' => [
                        'Función que se ejecuta automáticamente.',
                        'Variable que almacena un valor constante.',
                        'Estructura que define una clase.',
                    ],
                    'explanation' => 'La declaración guard es útil para manejar condiciones de error.'
                ],
                [
                    'word' => 'Deinit',
                    'correct' => 'Método que se llama cuando una instancia de una clase se está desinicializando.',
                    'incorrect' => [
                        'Función que se ejecuta automáticamente.',
                        'Variable que almacena un valor constante.',
                        'Estructura que define una clase.',
                    ],
                    'explanation' => 'El método deinit es útil para liberar recursos en Swift.'
                ],
                [
                    'word' => 'Extension',
                    'correct' => 'Permite agregar funcionalidad a una clase, estructura o protocolo existente.',
                    'incorrect' => [
                        'Función que se ejecuta automáticamente.',
                        'Variable que almacena un valor constante.',
                        'Estructura que define una clase.',
                    ],
                    'explanation' => 'Las extensiones son útiles para agregar métodos a tipos existentes.'
                ],
                [
                    'word' => 'Lazy',
                    'correct' => 'Propiedad que no se inicializa hasta que se accede a ella por primera vez.',
                    'incorrect' => [
                        'Función que se ejecuta automáticamente.',
                        'Variable que almacena un valor constante.',
                        'Estructura que define una clase.',
                    ],
                    'explanation' => 'Las propiedades lazy son útiles para inicializar valores de manera diferida.'
                ],
                [
                    'word' => 'Subscript',
                    'correct' => 'Permite acceder a los elementos de una colección, lista o secuencia de una manera conveniente.',
                    'incorrect' => [
                        'Función que se ejecuta automáticamente.',
                        'Variable que almacena un valor constante.',
                        'Estructura que define una clase.',
                    ],
                    'explanation' => 'Los subscripts son útiles para acceder a elementos de colecciones en Swift.'
                ],
            ],
            /**
             * Palabras de la categoría Libros
             */
            'Libros' => [
                [
                    'word' => 'Prólogo',
                    'correct' => 'Texto introductorio que precede al cuerpo de una obra literaria.',
                    'incorrect' => [
                        'Último capítulo de una novela.',
                        'Diálogo entre personajes.',
                        'Parte del libro donde va el índice.',
                    ],
                    'explanation' => 'El prólogo ofrece contexto y antecedentes sobre la obra.'
                ],
                [
                    'word' => 'Epílogo',
                    'correct' => 'Sección final de una obra literaria que resume y concluye la historia.',
                    'incorrect' => [
                        'Capítulo introductorio.',
                        'Nota del autor.',
                        'Parte del libro donde se encuentran las referencias.',
                    ],
                    'explanation' => 'El epílogo proporciona una conclusión y cierre a la narrativa.'
                ],
                [
                    'word' => 'Metáfora',
                    'correct' => 'Figura retórica que compara dos cosas diferentes sin usar "como".',
                    'incorrect' => [
                        'Descripción detallada de un personaje.',
                        'Diálogo entre dos personajes.',
                        'Narración de eventos históricos.',
                    ],
                    'explanation' => 'Las metáforas enriquecen el lenguaje y la expresión literaria.'
                ],
                [
                    'word' => 'Narrador',
                    'correct' => 'Voz que cuenta la historia en una obra literaria.',
                    'incorrect' => [
                        'Personaje principal de la historia.',
                        'Autor del libro.',
                        'Editor de la obra.',
                    ],
                    'explanation' => 'El narrador puede ser en primera, segunda o tercera persona.'
                ],
                [
                    'word' => 'Antagonista',
                    'correct' => 'Personaje que se opone al protagonista en una obra literaria.',
                    'incorrect' => [
                        'Personaje secundario.',
                        'Narrador de la historia.',
                        'Autor del libro.',
                    ],
                    'explanation' => 'El antagonista crea conflicto y tensión en la narrativa.'
                ],
                [
                    'word' => 'Clímax',
                    'correct' => 'Punto de mayor tensión o interés en una obra literaria.',
                    'incorrect' => [
                        'Inicio de la historia.',
                        'Desenlace de la trama.',
                        'Descripción de un personaje.',
                    ],
                    'explanation' => 'El clímax es el momento culminante de la narrativa.'
                ],
                [
                    'word' => 'Género',
                    'correct' => 'Categoría que clasifica las obras literarias según su contenido y estilo.',
                    'incorrect' => [
                        'Nombre del autor.',
                        'Título del libro.',
                        'Capítulo de la obra.',
                    ],
                    'explanation' => 'Los géneros literarios incluyen ficción, no ficción, poesía, etc.'
                ],
                [
                    'word' => 'Trama',
                    'correct' => 'Secuencia de eventos que conforman la historia en una obra literaria.',
                    'incorrect' => [
                        'Descripción de un personaje.',
                        'Diálogo entre personajes.',
                        'Nota del autor.',
                    ],
                    'explanation' => 'La trama es el esqueleto de la narrativa.'
                ],
                [
                    'word' => 'Protagonista',
                    'correct' => 'Personaje principal de una obra literaria.',
                    'incorrect' => [
                        'Narrador de la historia.',
                        'Autor del libro.',
                        'Personaje secundario.',
                    ],
                    'explanation' => 'El protagonista es el centro de la acción y el conflicto.'
                ],
                [
                    'word' => 'Diálogo',
                    'correct' => 'Intercambio de palabras entre dos o más personajes en una obra literaria.',
                    'incorrect' => [
                        'Descripción de un paisaje.',
                        'Nota del autor.',
                        'Título del libro.',
                    ],
                    'explanation' => 'El diálogo revela la personalidad y las intenciones de los personajes.'
                ],
            ],
            /**
            * Palabras de la categoría Países
            */
            'Países' => [
                [
                    'word' => 'Japón',
                    'correct' => 'País insular del este de Asia conocido por su tecnología y cultura milenaria.',
                    'incorrect' => [
                        'País europeo donde se habla portugués.',
                        'Territorio africano sin salida al mar.',
                        'Nación sudamericana donde se encuentra el Amazonas.',
                    ],
                    'explanation' => 'Japón es famoso por su tecnología avanzada y su rica historia cultural.'
                ],
                [
                    'word' => 'Brasil',
                    'correct' => 'País sudamericano conocido por su carnaval y la selva amazónica.',
                    'incorrect' => [
                        'País asiático famoso por sus templos antiguos.',
                        'Nación europea con una gran tradición de ópera.',
                        'Territorio africano conocido por sus safaris.',
                    ],
                    'explanation' => 'Brasil es el país más grande de América del Sur y tiene una biodiversidad increíble.'
                ],
                [
                    'word' => 'Canadá',
                    'correct' => 'País norteamericano conocido por su vasto territorio y su diversidad cultural.',
                    'incorrect' => [
                        'País europeo famoso por su gastronomía.',
                        'Nación asiática con una gran población.',
                        'Territorio africano con una gran variedad de fauna.',
                    ],
                    'explanation' => 'Canadá es el segundo país más grande del mundo y tiene dos idiomas oficiales: inglés y francés.'
                ],
                [
                    'word' => 'Australia',
                    'correct' => 'País insular de Oceanía conocido por su fauna única y la Gran Barrera de Coral.',
                    'incorrect' => [
                        'País europeo con una gran tradición de fútbol.',
                        'Nación asiática famosa por sus rascacielos.',
                        'Territorio africano con una gran variedad de desiertos.',
                    ],
                    'explanation' => 'Australia es famosa por sus canguros y koalas, así como por su impresionante naturaleza.'
                ],
                [
                    'word' => 'India',
                    'correct' => 'País asiático conocido por su rica historia y diversidad cultural.',
                    'incorrect' => [
                        'País europeo famoso por sus castillos.',
                        'Nación sudamericana con una gran tradición de tango.',
                        'Territorio africano conocido por sus pirámides.',
                    ],
                    'explanation' => 'India es el segundo país más poblado del mundo y tiene una gran variedad de idiomas y religiones.'
                ],
                [
                    'word' => 'Egipto',
                    'correct' => 'País africano conocido por sus antiguas pirámides y su historia faraónica.',
                    'incorrect' => [
                        'País europeo famoso por sus museos.',
                        'Nación asiática con una gran tradición de artes marciales.',
                        'Territorio sudamericano conocido por sus playas.',
                    ],
                    'explanation' => 'Egipto es famoso por sus monumentos antiguos, como las pirámides de Giza y la Esfinge.'
                ],
                [
                    'word' => 'Francia',
                    'correct' => 'País europeo conocido por su gastronomía, moda y la Torre Eiffel.',
                    'incorrect' => [
                        'País asiático famoso por sus templos budistas.',
                        'Nación sudamericana con una gran tradición de samba.',
                        'Territorio africano conocido por sus reservas naturales.',
                    ],
                    'explanation' => 'Francia es famosa por su cultura, arte y arquitectura, especialmente en París.'
                ],
                [
                    'word' => 'China',
                    'correct' => 'País asiático conocido por su gran población y su historia milenaria.',
                    'incorrect' => [
                        'País europeo famoso por sus canales.',
                        'Nación sudamericana con una gran tradición de fútbol.',
                        'Territorio africano conocido por sus montañas.',
                    ],
                    'explanation' => 'China es el país más poblado del mundo y tiene una historia rica y diversa.'
                ],
                [
                    'word' => 'México',
                    'correct' => 'País norteamericano conocido por su comida, música y cultura vibrante.',
                    'incorrect' => [
                        'País europeo famoso por sus óperas.',
                        'Nación asiática con una gran tradición de sumo.',
                        'Territorio africano conocido por sus safaris.',
                    ],
                    'explanation' => 'México es famoso por su cocina, música y festivales, como el Día de los Muertos.'
                ],
                [
                    'word' => 'Italia',
                    'correct' => 'País europeo conocido por su arte, historia y gastronomía.',
                    'incorrect' => [
                        'País asiático famoso por sus jardines zen.',
                        'Nación sudamericana con una gran tradición de carnaval.',
                        'Territorio africano conocido por sus desiertos.',
                    ],
                    'explanation' => 'Italia es famosa por su comida, arte y arquitectura, especialmente en ciudades como Roma y Venecia.'
                ],
            ],
            /**
            * Palabras de la categoría Deportes
            */
            'Deportes' => [
                [
                    'word' => 'Maratón',
                    'correct' => 'Carrera de larga distancia de 42.195 kilómetros.',
                    'incorrect' => [
                        'Prueba de ciclismo de montaña.',
                        'Partido de fútbol de dos tiempos.',
                        'Juego de raqueta sobre césped.',
                    ],
                    'explanation' => 'El maratón es una prueba de resistencia que se corre en todo el mundo.'
                ],
                [
                    'word' => 'Fútbol',
                    'correct' => 'Deporte de equipo que se juega con un balón y dos porterías.',
                    'incorrect' => [
                        'Juego de mesa con fichas.',
                        'Deporte acuático con tablas.',
                        'Competencia de atletismo.',
                    ],
                    'explanation' => 'El fútbol es el deporte más popular del mundo y se juega en casi todos los países.'
                ],
                [
                    'word' => 'Tenis',
                    'correct' => 'Deporte de raqueta que se juega en una cancha dividida por una red.',
                    'incorrect' => [
                        'Deporte de contacto con guantes.',
                        'Juego de cartas.',
                        'Competencia de natación.',
                    ],
                    'explanation' => 'El tenis es un deporte que se puede jugar individualmente o en parejas.'
                ],
                [
                    'word' => 'Baloncesto',
                    'correct' => 'Deporte de equipo que se juega con un balón y dos canastas.',
                    'incorrect' => [
                        'Juego de mesa con dados.',
                        'Deporte de invierno con esquís.',
                        'Competencia de ciclismo.',
                    ],
                    'explanation' => 'El baloncesto es conocido por su dinamismo y la altura de sus jugadores.'
                ],
                [
                    'word' => 'Natación',
                    'correct' => 'Deporte acuático que consiste en desplazarse en el agua usando el cuerpo.',
                    'incorrect' => [
                        'Deporte de contacto con pelotas.',
                        'Juego de mesa con cartas.',
                        'Competencia de atletismo.',
                    ],
                    'explanation' => 'La natación es uno de los deportes más completos y se practica en piscinas y en aguas abiertas.'
                ],
                [
                    'word' => 'Ciclismo',
                    'correct' => 'Deporte que consiste en montar y competir en bicicleta.',
                    'incorrect' => [
                        'Deporte de contacto con guantes.',
                        'Juego de mesa con fichas.',
                        'Competencia de natación.',
                    ],
                    'explanation' => 'El ciclismo es un deporte muy popular y se practica en carretera y montaña.'
                ],
                [
                    'word' => 'Boxeo',
                    'correct' => 'Deporte de contacto en el que dos personas luchan usando los puños.',
                    'incorrect' => [
                        'Deporte acuático con tablas.',
                        'Juego de cartas.',
                        'Competencia de atletismo.',
                    ],
                    'explanation' => 'El boxeo es conocido por su intensidad y requiere mucha preparación física.'
                ],
                [
                    'word' => 'Golf',
                    'correct' => 'Deporte que consiste en golpear una pelota con un palo para introducirla en hoyos.',
                    'incorrect' => [
                        'Deporte de contacto con guantes.',
                        'Juego de mesa con fichas.',
                        'Competencia de natación.',
                    ],
                    'explanation' => 'El golf es un deporte que se juega en grandes campos y requiere precisión y estrategia.'
                ],
                [
                    'word' => 'Voleibol',
                    'correct' => 'Deporte de equipo que se juega con un balón y una red en el centro de la cancha.',
                    'incorrect' => [
                        'Deporte de invierno con esquís.',
                        'Juego de mesa con cartas.',
                        'Competencia de ciclismo.',
                    ],
                    'explanation' => 'El voleibol es un deporte muy dinámico y se juega tanto en interiores como en exteriores.'
                ],
                [
                    'word' => 'Atletismo',
                    'correct' => 'Conjunto de disciplinas deportivas que incluyen carreras, saltos y lanzamientos.',
                    'incorrect' => [
                        'Deporte de contacto con pelotas.',
                        'Juego de mesa con dados.',
                        'Competencia de natación.',
                    ],
                    'explanation' => 'El atletismo es uno de los deportes más antiguos y se practica en todo el mundo.'
                ],
            ],

        ];
        

        /**
        * Esta parte lo que hace es recorrer el arreglo de cada categoría 
        * (por ejemplo recorre la categoría "Biología") y accede a su información (ya sea las palabra, respuestas).
        */
        foreach ($words as $categoryName => $wordList) {
            // Aquí se busca en la tabla categories un registro en que el nombre coincida con el nombre de la categoría actual.
            $category = Category::where('name', $categoryName)->first();

            // Si se encuentra la categoría en la base de datos, se insertan las palabras.
            if ($category) {
                /**
                 * Awui se recorren la lista de palabras de la categoría actual.
                 * Cada elemento de $data contiene la palabra, la respuesta correcta, las incorrectas y una explicación.
                 */
                foreach ($wordList as $data) {
                    // Aqui se crea un nuevo registro en la tabla words con los datos proporcionados.
                    Word::create([
                        'category_id' => $category->id, // Aqui asignamoa el ID de la categoría correspondiente.
                        'word' => $data['word'], // Palabra
                        'correct_answer' => $data['correct'], // Esta es la respuesta correcta.
                        'incorrect_1' => $data['incorrect'][0], // Primera respuesta incorrecta.
                        'incorrect_2' => $data['incorrect'][1], // Segunda respuesta incorrecta.
                        'incorrect_3' => $data['incorrect'][2], // Tercera respuesta incorrecta.
                        'explanation' => null, // Para agregar una explicación de porqué la apalabra correcta es correcta. 
                    ]);
                }
            }
        }
        
    }
}
