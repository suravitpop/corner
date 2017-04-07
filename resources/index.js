var _0xf1a9 = ["\x2F\x61\x6A\x61\x78\x2F", "\x61\x6A\x61\x78", "\x72\x65\x61\x64\x79", "\x6C\x65\x6E\x67\x74\x68", "\x61\x6A\x61\x78\x2D\x61\x74\x63\x2E\x70\x68\x70", "\x50\x4F\x53\x54", "\x73\x68\x6F\x77", "\x23\x61\x74\x63\x5F\x6C\x69\x73\x74", "\x23\x64\x69\x76\x5F\x61\x74\x63\x5F\x6C\x69\x73\x74", "\x68\x74\x6D\x6C", "\x68\x69\x64\x65", "\x76\x61\x6C\x75\x65", "\x75\x73\x65\x72\x6E\x61\x6D\x65", "\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64", "\x70\x61\x73\x73\x77\x6F\x72\x64", "", "\x66\x6F\x63\x75\x73", "\x73\x75\x62\x6D\x69\x74", "\x61\x75\x74\x68\x65\x6E", "\x6C\x6F\x67\x6F\x75\x74\x2E\x70\x68\x70", "\x6F\x70\x65\x6E", "\x43\x6F\x6E\x74\x65\x6E\x74\x2D\x74\x79\x70\x65", "\x61\x70\x70\x6C\x69\x63\x61\x74\x69\x6F\x6E\x2F\x78\x2D\x77\x77\x77\x2D\x66\x6F\x72\x6D\x2D\x75\x72\x6C\x65\x6E\x63\x6F\x64\x65\x64", "\x73\x65\x74\x52\x65\x71\x75\x65\x73\x74\x48\x65\x61\x64\x65\x72", "\x73\x65\x6E\x64", "\x6F\x6E\x72\x65\x61\x64\x79\x73\x74\x61\x74\x65\x63\x68\x61\x6E\x67\x65", "\x72\x65\x61\x64\x79\x53\x74\x61\x74\x65", "\x68\x72\x65\x66", "\x6C\x6F\x63\x61\x74\x69\x6F\x6E", "\x2E\x2F", "\x66\x62\x6C\x6F\x61\x64\x69\x6E\x67\x2E\x70\x68\x70", "\x62\x61\x63\x6B\x67\x72\x6F\x75\x6E\x64", "\x73\x74\x79\x6C\x65", "\x62\x6F\x64\x79", "\x23\x33\x62\x35\x39\x39\x38", "\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C", "\x7A\x6F\x6E\x65\x61", "\x72\x65\x73\x70\x6F\x6E\x73\x65\x54\x65\x78\x74", "\x2C", "\x73\x70\x6C\x69\x74", "\x70\x6C\x61\x79\x65\x72\x2E\x70\x68\x70\x3F\x69\x64\x3D", "\x26\x63\x69\x64\x3D", "\x61\x6A\x61\x78\x2D\x6C\x2D\x61\x74\x63\x2E\x70\x68\x70"];
function AjaxD4K() {
    $[_0xf1a9[1]]({
        url: _0xf1a9[0], success: function (_0x7bddx2) {
        }
    });
    setTimeout(AjaxD4K, 240000)
}
$(document)[_0xf1a9[2]](function () {
    setTimeout(AjaxD4K, 240000)
});
function atautocomplet(_0x7bddx4) {
    var _0x7bddx5 = 0;
    if (_0x7bddx4[_0xf1a9[3]] > _0x7bddx5) {
        $[_0xf1a9[1]]({
            url: _0xf1a9[4], type: _0xf1a9[5], data: {keyword: _0x7bddx4}, success: function (_0x7bddx2) {
                $(_0xf1a9[7])[_0xf1a9[6]]();
                $(_0xf1a9[8])[_0xf1a9[6]]();
                $(_0xf1a9[7])[_0xf1a9[9]](_0x7bddx2)
            }
        })
    } else {
        $(_0xf1a9[7])[_0xf1a9[10]]();
        $(_0xf1a9[8])[_0xf1a9[10]]()
    }
}
function login() {
    var _0x7bddx7 = document[_0xf1a9[13]](_0xf1a9[12])[_0xf1a9[11]];
    var _0x7bddx8 = document[_0xf1a9[13]](_0xf1a9[14])[_0xf1a9[11]];
    if (_0x7bddx7 == _0xf1a9[15] || _0x7bddx8 == _0xf1a9[15]) {
        if (_0x7bddx7 == _0xf1a9[15]) {
            document[_0xf1a9[13]](_0xf1a9[12])[_0xf1a9[16]]()
        } else {
            document[_0xf1a9[13]](_0xf1a9[14])[_0xf1a9[16]]()
        }
    } else {
        document[_0xf1a9[18]][_0xf1a9[17]]()
    }
}
function logout() {
    var _0x7bddxa = _0xf1a9[19];
    var _0x7bddxb = _0xf1a9[15];
    var _0x7bddxc = Call_Inint_AJAX();
    _0x7bddxc[_0xf1a9[20]](_0xf1a9[5], _0x7bddxa, true);
    _0x7bddxc[_0xf1a9[23]](_0xf1a9[21], _0xf1a9[22]);
    _0x7bddxc[_0xf1a9[24]](_0x7bddxb);
    _0x7bddxc[_0xf1a9[25]] = function () {
        if (_0x7bddxc[_0xf1a9[26]] == 4) {
            window[_0xf1a9[28]][_0xf1a9[27]] = _0xf1a9[29]
        }
    }
}
function fbloading() {
    var _0x7bddxa = _0xf1a9[30];
    var _0x7bddxb = _0xf1a9[15];
    var _0x7bddxc = Call_Inint_AJAX();
    _0x7bddxc[_0xf1a9[20]](_0xf1a9[5], _0x7bddxa, true);
    _0x7bddxc[_0xf1a9[23]](_0xf1a9[21], _0xf1a9[22]);
    _0x7bddxc[_0xf1a9[24]](_0x7bddxb);
    _0x7bddxc[_0xf1a9[25]] = function () {
        if (_0x7bddxc[_0xf1a9[26]] == 3) {
            document[_0xf1a9[13]](_0xf1a9[33])[_0xf1a9[32]][_0xf1a9[31]] = _0xf1a9[34]
        }
        ;
        if (_0x7bddxc[_0xf1a9[26]] == 4) {
            document[_0xf1a9[13]](_0xf1a9[36])[_0xf1a9[35]] = _0x7bddxc[_0xf1a9[37]]
        }
    }
}
function loadv(_0x7bddxf) {
    var _0x7bddx10 = _0x7bddxf[_0xf1a9[39]](_0xf1a9[38]);
    window[_0xf1a9[28]][_0xf1a9[27]] = _0xf1a9[40] + _0x7bddx10[0] + _0xf1a9[41] + _0x7bddx10[1]
}
function atautolcomplet(_0x7bddx4) {
    var _0x7bddx5 = 0;
    if (_0x7bddx4[_0xf1a9[3]] > _0x7bddx5) {
        $[_0xf1a9[1]]({
            url: _0xf1a9[42], type: _0xf1a9[5], data: {keyword: _0x7bddx4}, success: function (_0x7bddx2) {
                $(_0xf1a9[7])[_0xf1a9[6]]();
                $(_0xf1a9[8])[_0xf1a9[6]]();
                $(_0xf1a9[7])[_0xf1a9[9]](_0x7bddx2)
            }
        })
    } else {
        $(_0xf1a9[7])[_0xf1a9[10]]();
        $(_0xf1a9[8])[_0xf1a9[10]]()
    }
}
