Opis zadania
------------
Przedmiotem zadania jest stworzenie obiektowego mechanizmu umożliającego budowę obwodu RLC na podstawie zadanych testów.

Twoim zadaniem jest stworzenie:
- klas odwzorowujących elementy bazowe z których budujemy obwód (rezystor, cewka, kondensator)
- mechanizmu pozwalającego obliczyć rezystancja/indukcyjność/pojemność zastępczą (wg. podanych wzorów)
- klasy odwzorowującej sposób połączenia elementów
- klasy odwzorowującej gotowy obwód 

W katalogu `tests/` znajdują się testy, których spełnienie powinny zapewnić stworzone obiekty.
Oczywiście testów nie należy modyfikować.

Wytyczne odnośnie zadania:
- obwód RLC składa się z dowolnej ilości elementów połączonych szeregowo
- każdy element obwodu RLC moze składać się z dowolnej liczby elementów bazowych jednego typu (rezystor, kondensator, cewka), połączonych w ten sam sposób (szeregowo, lub równolegle)
- każdy element bazowy posiada nieujemną wartość liczbową
- kondensator nie może mieć pojemności równej 0 

Wzory potrzebne do obliczeń:
- połączenia szeregowe: https://pl.wikipedia.org/wiki/Po%C5%82%C4%85czenie_szeregowe
- połączenia równoległe: https://pl.wikipedia.org/wiki/Po%C5%82%C4%85czenie_r%C3%B3wnoleg%C5%82e

Uruchomienie projektu
---------------------

Instalacja composer'a:

https://getcomposer.org/

Instalacja paczek - w zależności od sposobu instalacji comosera globalnie/lokalnie

`composer install` / `php composer.phar install`

Uruchomienie testów

`./vendor/bin/phpunit`