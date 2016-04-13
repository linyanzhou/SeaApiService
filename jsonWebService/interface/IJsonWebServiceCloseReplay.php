<?php
/**
 * JsonWebService�ӿڽ�ֹ�طŴ����߼�
 * <li>������ô˽ӿڣ�����ʹ��memcached��Ϊ����</li>
 * <li><strong>���棺</strong>������ӿڳ�������������API����̱��</li>
 * <li>ע�⣺���ӿڴ��ڿ�ܵ���ǰ�˲������ǳ��󣬲�����������ʵ�ֹ����ҵ���߼��������ܲ�Ҫʹ�����ݿ�</li>
 * @author JerryLi 2015-09-04
 * @example ��־����
 * 1:createLog(data);
 */
interface IJsonWebServiceCloseReplay{
    /**
     * ����Ƿ�����طŷ���
     * @param string $sSignKey ǩ���ַ�����sha1������40���ַ��� 
     * @param int $iReplayTime sign����ʱ��(��) 
     * @return boolean true:�طŷ��� | false:���طŷ���
     */
    public function checkReplay($sSignKey, $iReplayTime);
}