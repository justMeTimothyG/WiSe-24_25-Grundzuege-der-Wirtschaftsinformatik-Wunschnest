## Wie hole ich mir die neuesten Updates aus Master auf meine Branch?

Bevor man immer anfängt zu entwickeln, sollte man sich die Updates aus Master holen, damit es später nicht zu Problemen kommt und Konflikte kommt.

erstmal solltet ihr euch die Updates aus GitHub holen

```bash
git pull
```

nun müsst ihr die Updates von Master auf eure eigene Branch hinzufügen (Branch -> Kürzel VN (erstbuchstabe vornamen und erstbuchstabe nachname))

Das ist ein merge.

dafür müsst ihr auf eurer Branch sein

```bash
git checkout <kürzel>
```

und dann den eigentlich merge

```bash
git merge origin/master
```

Damit solltet ihr die Updates haben. Aber auch nur wenn es keine Konflikte gibt, aber keine Widersprechenden Änderungen. Bei Konflikten muss man im Einzelfall schauen, welche Änderungen man behalten will.

Das ist etwas komplizierter und das können wir am besten in Persona am besten klären.
