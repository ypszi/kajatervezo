# Bevásárlás tervező

1. A hiányzó ételeket vedd fel az `\PeterPecosz\Kajatervezo\Etel` namespace-be
2. A hiányzó hozzávalókat add hozzá a `\PeterPecosz\Kajatervezo\Hozzavalo` namespace-be
3. Amennyiben mértékegység preferenciát szeretnél definiálni,
   add hozzá a `\PeterPecosz\Kajatervezo\Hozzavalo\Hozzavalo::MERTEKEGYSEG_PREFERENCE` const-hoz

Futtasd a következő command-ot:
```shell
bin/console plan:shopping
```
