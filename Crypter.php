<?php

/*
 * Copyright 2018 Łukasz Szpak <szpaaaaq@gmail.com>
 * You are free to use, share or modify this file as long as this text stays here
 * Questions? Contact Author
 */

class Crypter
{
    const CRYPTER_SALT = 'jY0Pq]rI4y()C.P]pU,Us_uTS[D6[MzUkpP(C[]C3[5Fu]jQDHhCr2]kGQL+s\gh4f1OA/3cczv-VfkU[lUb2EG1qJf(\eP)Fk0pXVu8qR]STLj.A(z8h+2/8VWg4G\jz]zxSl3a3c]B8QZ3KU00PsoCr8\P.iU7ol4Ym(.iQgS9]Q9dBKxksqV_HfrJa0unIT4RpL]grz]bD.kIB1FC-H)Y[3]q]]PWFzNaW;=igJ[sO[6VTeYaJh_H(+-FrZ[WOGn5ajwrb8yA[R7yrE[u1P0Fya6]u7a_mpi]/]+5cPxvcYUr9)(shB7Y[_4ln;E(xP71;js)XU]V]jx(gdJQzNGaf7)tZBNvr03eQQWaajD;WgC=W8dJJYq,.;CeBD5h6Bilx,wp/M4JQ96vvJ1NLQjNV;9dIJWF)IeWCORTQ=N=]R/Y]D-7X[973Zx,V.f/ATuaxnW()k5Mb)wu]merIuSZHzR;l544X\[xnBuR.098]di+]y7zC3,d=9AS(/k,ZL,c6YPDNGWx[GMf(hSgy-_vydr23UA4BdLvZ)UP_BQ,HchYzEHD5M/=ggF_pqAOX\txw[Awq=A3\n+vx].yW.jf)=E]Mvx,,BZR-Kq93P[hOxc67IN_Ol6uJb5USHO3Q\-[\pxK3S55]al4I[/oylDBTXuHv;mY\h3A4TQAV/Or)9fXdRMiBjoxY]rjAQ8Q+qkDo5Kb.iVd=r]6VaY/xY/f8QSdRM]_-aB.lVS7()19]W5n=nhL//HMrl6/IPVDwScsDB1t]v02AUh4r,B]JLBDBhUyAv+HYhF)ZDcmIor(GkPvxgy([;c[lc/[QVNcZ1SD)9l[[qHC-.IWQkh73pa5_oJD_wHO.)(iM6\2dre3/kZRs33aq4ViemFYF1JZ53+BSr9(8]pUafF8x3]3k.H_ZM]NAil][M(Qa+S2WeCK/J7trqhFzJYsEGK[]1PHSfrcRNBAN3\-mNX=sNd97pTcv)Z]Xb]PRpI[a8CNnq[2PDU]j4HAJrVvmXIr/GRgVEs_ok(/fpc;h9]I[URTQvM0DS08,dRn_fM]d1R3P_V9tZ733S]+AHPXG7]2CLjCpzvqCW8ofr_QZNL;/RatjG2g6Zu]J)Fi5yxfF_9_VtSQ30;12xT3Awx]eL8=1,/[(6=k.Go/WwZiOa7.0wQ\w(Cj;N=LbXF[Ehj)9=0BkGebmiL5Hbg5k1YU0NGcu.XeHko5-Cg\e9uRfyoL[dCv(thEsbcf)HQf0,R]AkqRfu8Els7Hy[55)]m]twEJLS[/Fp(V]O5qHlFWI0yuBmT]Kp.wa-NLTJV05[ASDb;qfnza82+\[d=449m[m///bMKfG,.1d=TVPV1/oxm-cC-z6QDqETnzcF_]y[[x2230KezqA[0;O[Jv6]XAOdN/DIi6(td0hB](l63\I8HMUzv)JUDtSyL7gsPg+hq[]5-KZ2_28;5zP0t19]X[t.yB1oUvWYey).6Ny-vAyH;]\A0vA)34,UWm7Mubmvos3t+.+f3JLwYFVFKCzZ5nxKyr)6ubx10ThwYk]O-0,MXhg5n08F5Pa9+HWLN/]]rvzmWL2(SYfWhglH=Wzz9K]KA-qgNHiNPt[G=Y-kF1MaFr;HHrf,CT;2fy6Ig,McWwH]ImT8ohf(Qmfl[pjY44yOFxZpygvGAEd\=2[gpNIL_=/JqM6b]PKjOpham[iNKZStM4O61Y4f)]GL/[vKDGvOsJ9E85V]-+v+TwOo/)IG+uYEr86Vy;qPI-rHh/yFBeRbv)C6lQ53kHz\)a)nOnoZ]DZBA2C_p2h7g1wk8xTxa]5]IYevCk(.bI=Vbl6r-gIKhjPLKKE(Cw1EzZvPFH-W\Aw],65O/jDWhMHaxxFzq[vH1.]Umfb\KoDVZU4]=K\0cPE;XF7]O.th0[eUX+EY[MWn5fjKw1i4]5iZiu4JRftrF0).zNBbk9ik_2f8HOx\tFP]\HPBCXDt0rnZ18MZ-tW-8PfuXU+Y/tHdLWvt[RA1Q/WFFq]hJS1IN4tBDfE[518Md[-r.L=tWfLUgl[jGo55mKpYTPYe01sg[lI96bfXxb8[A7C9[4TccNT]pz7q5oeP3KktYdJ4[1Mh]C7g(huGSzt/m]R4=]YVS5lzl8UV/RuT44(z9N=u8rQKLJUFHTL;Soem]01(ZiV[ovLM5Q.a4oH(X3[1(6lI6EGV[]jw1o]w(-1zVF+]2gRZ_hjpL4_aFq4=0TguYWTVl7vU21,d,=W)Jl(OHa(nEpN[l2t/t))o=3Eg/gj5=JkuUV[-1_6mCxiM13/i5s-(b[iiZOh[Wp[KHd17Sg,Db()iI\m.VUE0CIA6UOPpT_Lg5O/aRPI]1s+].PzlcN2Z8CC1N]hTY69YGy[kEKr1W)QNhDikbVY6]f.9lbyeCK\REtLIZ)waqf3k+St9kG-W\yRhhdhB[1J(LHVQVAiQR[OR8s.ps)e],jBqEx;cx/f(yo+J7fZE[HMG\K4f+0kj0)js[[x;WNN[YY\rIuO3eL)+CJUSLZE,C0[y\4GqiX-1z6O[ubdj)Z\q)fY9jG]P5rfK=YE/L4v_KV+bOvygL[V04ydSuQSqc[D1FAE]L.aG39KUk7OgB6c=_Ot5=f=cQ[]vXHV1MRZrTYoHmt=b]l5hjnWB+iyzyg1r;-t\VqAQLiuXZ(XtDP\_yZhQxkOE;PArx.+izYc4=d=9[0B03od(BB8lE;a]mZXguLwKU-])28S(Mk8-IHA][(jUPbP=jFsxQHd]cBFiGB9NTzIGY]vyPQoB-))s2xLS3QdY\sz1]90[L\\Amf]dcJ]/eXR6m61sCjSjJzuFzl]59JP,XFcr95tzxU_Fyt[4VrkPxIAPfW=deLf.9/Oag]I\2Uhl-otN=VQz+1I[+0O,VeNwZ/c],AGghmnd,LjHHR8R,+eH)N;B6=SffWdKxiVRAEPgl,3fFVYZHFhb-27h7-LNs/8P,mHXf)[N4xj;zz_Yi1svWtW,[[]aW(V,YET+6]-c+\SH6dflD\\[6Z5qoS3lwek,B[vmw1kRlg,Pl(5FpN[eWbDASmip19vR6\WC-h3h5;Qe]FccE-N9zfB+8.+j-zx,[NpAmc2)TEh\nwK1c[xol2Srlcpt55gi8TEI,Gn+M-P3B_hAYtbcFhfAC9AiX5VNx8G]9Vl8aJf5o/3\tjJfelzqkpp]8Wf;CoLN]g.=xJgm1]KqTkmF-z0GFJK;1+;awx6)So5,ZeKoJgC,wloYk]xOJhxcy-EjoSpI-6-S++rlx06g/]6yqjJAPm,Z)cow_yct=55Xwp94A,0YMb-chtDkVFPrseiQH[nPay1N,g[nTB7bFv[8Hg;k,i7gV2F8pJwyRIaHy][M+4J0jy/\Zz4vVt+T2mZFm+v]KxFfxI/.]8)aoZ..YCul-929g3t=OSTWV2JZ5T76]\]p]Kw[JzcdLEYP2ckL)[jY/BR(Se\qe[_[[;bwEkIy0qC9W[B;[OJO7x.vCo(93YN-M1to8/UgDWToXdNvM]mcygW]xaH(U2f_M1TGYx=/.N[yU/Qi4Z;EQ0fX\R.tg4ClThUwIZv_LRJKGrCTJYz93L.3B.yfexTm5nKcY01zk6Uo724]YpWpj]N\kKlHp5;hRMna\5[xq+dr78W_c8yw=YlzmbpW[9+X.l,+B12dsL1.eFnB0.=DA55;BTZSv,WQ(b[q-57R05r.zm[I1y(';
    /**
     * Encrypt encrypted file
     * @param mixed $data data to encrypt
     * @param mixed $key hash, if this string is path to file which actually exists it will use file as hash
     * @return string $encrypted data
     * */
    public static function encrypt($data, $key, $b64 = false)
    {
        if (file_exists($key)) {
            $key = file_get_contents($key);
        }
        $key .= self::CRYPTER_SALT;
        $l = strlen($key);
        if ($l < 16) {
            $key = str_repeat($key, ceil(16/$l));
        }

        if ($m = strlen($data)%8) {
            $data .= str_repeat("\x00",  8 - $m);
        }
        if (function_exists('mcrypt_encrypt')) {
            $val = mcrypt_encrypt(MCRYPT_BLOWFISH, $key, $data, MCRYPT_MODE_ECB);
        } else {
            $val = openssl_encrypt($data, 'BF-ECB', $key, OPENSSL_RAW_DATA | OPENSSL_NO_PADDING);
        }
        return $b64 === true ? base64_encode($val) : $val;
    }

    /**
     * Decrypt encrypted file
     * @param mixed $data encrypted data
     * @param mixed $key hash, if this string is path to file which actually exists it will use file as hash
     * @return string $decrypted data
     * */
    public static function decrypt($data, $key, $b64 = false)
    {
        if (file_exists($key)) {
            $key = file_get_contents($key);
        }
        if ($b64 === true) {
            $data = base64_decode($data);
        }
        $key .= self::CRYPTER_SALT;
        $l = strlen($key);
        if ($l < 16) {
            $key = str_repeat($key, ceil(16/$l));
        }
        if (function_exists('mcrypt_encrypt')) {
            $val = mcrypt_decrypt(MCRYPT_BLOWFISH, $key, $data, MCRYPT_MODE_ECB);
        } else {
            $val = openssl_decrypt($data, 'BF-ECB', $key, OPENSSL_RAW_DATA | OPENSSL_NO_PADDING);
        }
        $val = rtrim($val, "\0");
        return $val;
    }

    /**
     * Encrypt file
     * @param string $source source file
     * @param mixed $key hash, if this string is path to file which actually exists it will use file as hash
     * @param string $target (optionsl) target file if You'd like to save it
     * @return string encrypted string or false if file not exists
     * */
     public static function encryptFile($source, $key, $target = null)
     {
        if (!file_exists($source)) {
            return false;
        }
        $string = file_get_contents($source);
        $encrypted = self::encrypt($string, $key);
        if ($target !== null) {
            self::TargetDir(dirname($target));
            file_put_contents($target, $encrypted);
        }
        return $encrypted;
     }

    /**
     * Decrypt file
     * @param string $source source file
     * @param mixed $key hash, if this string is path to file which actually exists it will use file as hash
     * @param string $target (optionsl) target file if You'd like to save it
     * @return string decrypted string or false if file not exists
     * */
    public static function decryptFile($source, $key, $target = null)
    {
        if (!file_exists($source)) {
            return false;
        }
        $string = file_get_contents($source);
        $decrypted = self::decrypt($string, $key);
        if ($target !== null) {
            self::TargetDir(dirname($target));
            file_put_contents($target, $decrypted);
        }
        return $decrypted;
    }


    /**
     * Encrypt directory
     * @param string $source source directory
     * @param string $target target directory
     * @param mixed $key hash, if this string is path to file which actually exists it will use file as hash
     * */
    public static function encryptDirectory($source, $target, $key)
    {
        $source = self::TargetDir($source);
        $target = self::TargetDir($target);
        $files = scandir($source);
        foreach($files as $v) {
            if (is_dir($source.$v) || in_array($v, array('..', '.'))) {
                continue;
            } else {
                file_put_contents($target.$v, self::encrypt(file_get_contents($source.$v), $key));
            }
        }
    }

    /**
     * Decrypt directory
     * @param string $source source directory
     * @param string $target target directory
     * @param mixed $key hash, if this string is path to file which actually exists it will use file as hash
     * */
    public static function decryptDirectory($source, $target, $key)
    {
        $source = self::TargetDir($source);
        $target = self::TargetDir($target);
        $files = scandir($source);
        foreach($files as $v) {
            if (is_dir($source.$v) || in_array($v, array('..', '.'))) {
                continue;

            } else {
                file_put_contents($target.$v, self::decrypt(file_get_contents($source.$v), $key));
            }
        }
    }


    /**
     * creates directory if not exists and return target directory
     * @param string $directory target directory
     * @param int chmod - default 0755
     * @return string target directory
     * */
    public static function TargetDir($directory, $chmod = 0755)
    {
        $path = '';
        $ex = explode('/', ' '. $directory);
        $i = 0;
        while ($ex) {
            if (!$catalogue = array_shift($ex)) {
                continue;
            }
            $path .= trim($catalogue) .'/';
            if ($path == '/home') {
                continue;
            }
            if (!file_exists($path)) {
                mkdir($path, $chmod);
            }
        }
        return $path .'/';
    }
}
